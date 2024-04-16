<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SocialiteAuthController;
use App\Http\Controllers\ReportController;
// use App\Http\Controllers\InstamojoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[WebsiteController::class,'index'])->name('/');
Route::get('login', [HomeController::class,'admin_login'])->name('login');
Route::post('authCheck', [UserController::class,'login'])->name('authCheck');
Route::get('logout', [UserController::class,'logout'])->name('logout');
Route::post('userRegistration', [UserController::class,'userRegistration'])->name('userRegistration');
Route::get('userList', [UserController::class,'userList'])->name('userList');
Route::post('change-status', [UserController::class,'changeStatus'])->middleware('auth');
Route::post('change-payment-status', [UserController::class,'changePaymentStatus'])->middleware('auth');
Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('profile', [UserController::class,'profile'])->name('profile')->middleware('auth');
Route::get('petForm', [UserController::class,'petForm'])->name('petForm')->middleware('auth');
Route::get('yourPet', [UserController::class,'yourPet'])->name('yourPet')->middleware('auth');
Route::get('editYourPet/{id}', [UserController::class,'editYourPet'])->name('editYourPet')->middleware('auth');
Route::get('yourPetDelete/{id}', [UserController::class,'yourPetDelete'])->name('yourPetDelete')->middleware('auth');
Route::get('petInfo', [UserController::class,'petInfo'])->name('petInfo')->middleware('auth');
Route::get('petForm#wizard_Service', [UserController::class,'petForm'])->name('petForm#wizard_Service')->middleware('auth');
Route::get('petForm#wizard_Time', [UserController::class,'petForm'])->name('petForm#wizard_Time')->middleware('auth');
Route::get('petForm#wizard_Details', [UserController::class,'petForm'])->name('petForm#wizard_Details')->middleware('auth');
Route::get('petForm#wizard_Payment', [UserController::class,'petForm'])->name('petForm#wizard_Payment')->middleware('auth');
Route::post('update-profile-data', [UserController::class,'profile_update'])->name('update-profile-data')->middleware('auth');
Route::post('saveStep1', [UserController::class,'saveStep1'])->name('saveStep1')->middleware('auth');
Route::post('saveStep2', [UserController::class,'saveStep2'])->name('saveStep2')->middleware('auth');
Route::post('saveStep3', [UserController::class,'saveStep3'])->name('saveStep3')->middleware('auth');
Route::post('finalSubmit', [UserController::class,'finalSubmit'])->name('finalSubmit')->middleware('auth');
Route::post('savePetRegistration', [UserController::class,'savePetRegistration'])->name('savePetRegistration')->middleware('auth');
Route::post('saveProfile', [UserController::class,'saveProfile'])->name('saveProfile')->middleware('auth');

Route::post('sendMessage', [UserController::class,'sendMessage'])->name('sendMessage')->middleware('auth');
Route::post('adminMessage', [UserController::class,'adminMessage'])->name('adminMessage')->middleware('auth');

Route::get('generatePDF', [UserController::class,'generatePDF'])->name('generatePDF')->middleware('auth');
Route::get('support', [UserController::class,'support'])->name('support')->middleware('auth');
Route::get('petList', [UserController::class,'petList'])->name('petList')->middleware('auth');
Route::get('petReg', [UserController::class,'petReg'])->name('petReg')->middleware('auth');
Route::get('petDetails/{id}', [UserController::class,'petDetails'])->name('petDetails')->middleware('auth');
Route::get('petDelete/{id}', [UserController::class,'petDelete'])->name('petDelete')->middleware('auth');
Route::get('editPetDetails/{id}', [UserController::class,'editPetDetails'])->name('editPetDetails')->middleware('auth');
Route::post('updatePetdetails', [UserController::class,'updatePetdetails'])->name('updatePetdetails')->middleware('auth');

Route::get('summary', [ReportController::class,'summary'])->name('summary')->middleware('auth');


Route::get('google', [SocialiteAuthController::class, 'googleRedirect'])->name('auth/google');
Route::get('/auth/google-callback', [SocialiteAuthController::class, 'loginWithGoogle']);
Route::get('forgotPassword', [UserController::class,'forgotPassword'])->name('forgotPassword');
Route::get('forgot-password', [UserController::class,'forgoPassword'])->name('forgot-password');
Route::post('forgotPasswordData', [UserController::class,'forgotPasswordData'])->name('forgotPasswordData');
Route::post('forgotPasswordData2', [UserController::class,'forgotPasswordData2'])->name('forgotPasswordData2');
Route::get('faq', [UserController::class,'faq'])->name('faq');
Route::get('privacy_policy', [UserController::class,'privacy_policy'])->name('privacy_policy');
Route::get('refund_policy', [UserController::class,'refund_policy'])->name('refund_policy');
Route::get('terms_conditions', [UserController::class,'terms_conditions'])->name('terms_conditions');
Route::get('pricing', [UserController::class,'pricing'])->name('pricing');
Route::get('gallery', [UserController::class,'gallery'])->name('gallery');
Route::get('about', [UserController::class,'about'])->name('about');
Route::get('contact', [UserController::class,'contact'])->name('contact');

Route::any('proceed_Payment/{id}', [UserController::class,'proceed_Payment'])->name('proceed_Payment');
Route::any('payment_succes', [UserController::class,'success'])->name('payment_succes');
Route::get('/thank', function () {return view('thank');});