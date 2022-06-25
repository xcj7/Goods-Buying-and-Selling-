<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//registration
Route::get('/',[AllUserController::class,'Registration'])->name('registration');
Route::post('/',[AllUserController::class,'registrationSubmitted'])->name('registration');

//login
Route::get('/login',[AllUserController::class,'login'])->name('login');
Route::post('/login',[AllUserController::class,'loginSubmitted'])->name('login');
Route::get('/logout',[AllUserController::class,'logout'])->name('logout');
Route::get('/Dashboard',[AllUserController::class,'adminDashboard'])->name('adminDashboard');
