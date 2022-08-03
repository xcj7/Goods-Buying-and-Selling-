<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/registration',[AllUserController::class,'APIRegistration']);
Route::post('/registration',[AllUserController::class,'APIRegistrationSubmitted']);
Route::post('/login',[AllUserController::class,'APILoginSubmitted']);
Route::get('/profile/{id}',[AllUserController::class,'APIAdminprofile']);
