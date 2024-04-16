<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('user-sign-up', [UserController::class, 'userRegistration']);
Route::post('driver-sign-up', [UserController::class, 'driverRegistration']);
Route::post('update-personal-details', [UserController::class, 'driverPersonalDetails']);
Route::post('update-document-details', [UserController::class, 'driverDocumentDetails']);
Route::post('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);

 