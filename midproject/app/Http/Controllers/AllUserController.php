<?php

namespace App\Http\Controllers;

use App\Models\all_user;
use App\Http\Requests\Storeall_userRequest;
use App\Http\Requests\Updateall_userRequest;

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
     * @param  \App\Http\Requests\Storeall_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeall_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\all_user  $all_user
     * @return \Illuminate\Http\Response
     */
    public function show(all_user $all_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\all_user  $all_user
     * @return \Illuminate\Http\Response
     */
    public function edit(all_user $all_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateall_userRequest  $request
     * @param  \App\Models\all_user  $all_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updateall_userRequest $request, all_user $all_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\all_user  $all_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(all_user $all_user)
    {
        //
    }
    public function Registration()
    {
        return view('pages.registration');
    }
}
