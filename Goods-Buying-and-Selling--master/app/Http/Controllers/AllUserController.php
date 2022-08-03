<?php

namespace App\Http\Controllers;

use App\Models\AllUser;
use App\Http\Requests\StoreAllUserRequest;
use App\Http\Requests\UpdateAllUserRequest;
use Illuminate\Http\Request;
class AllUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAllUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAllUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllUser  $allUser
     * @return \Illuminate\Http\Response
     */
    public function show(AllUser $allUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllUser  $allUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AllUser $allUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAllUserRequest  $request
     * @param  \App\Models\AllUser  $allUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAllUserRequest $request, AllUser $allUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllUser  $allUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllUser $allUser)
    {
        //
    }
    public function APIRegistration()
    {
        return  AllUser::all();
    }
    public function APIRegistrationSubmitted(Request $request)
    {
       
        $st = new AllUser();
        $st->name = $request->name;
        $st->email = $request->email;
        $st->phone = $request->phone;
        $st->nid = $request->nid;
        $st->address = $request->address;
        $st->password =$request->password;
        $st->type = $request->type;
        $st->status = "active";
       // $st->created_at= new Date();
        if($st)
        {
            $st->save();
            return "Successfully User Added";
        }
            
        
    }
    public function APILoginSubmitted(Request $request)
    {
        $validate = $request->validate([
            'email'=>'email',
             'password'=>'required'
        ]);
        $stu = AllUser::where('email',$request->email)
                       ->where('password',$request->password)
                        ->first();
        if($stu){
           
            return "Successfuly Logged in";
        }
        return "Something went wrong";              
    }

    public function APIAdminprofile(Request $request)
    {
        
        $stu = Alluser::where('id',$request->id)->first();
        if($stu)
        {
           return $stu;
        }
    }
    public function AdminprofileSubmitted(Request $request)
    {
        $value = $request->session()->get('user');
        $st = Alluser::where('id',$value)->first();
        $st->name = $request->name;
        $st->phone = $request->phone;
        $st->nid = $request->nid;
        $st->address = $request->address;
        $st->password = $request->password;
       if($st)
       {
        $st->save();
        return redirect()->route('profile');
       }
      
    }
}
