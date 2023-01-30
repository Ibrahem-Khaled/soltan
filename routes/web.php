<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/accounting', function () {
    return view('accounting');
});
Route::get('/accounting2', function () {
    return view('accounting2');
});
Route::get('/accounting3', function () {
    return view('accounting3');
});
Route::get('/codeVerification', function () {
    return view('codeVerification');
});
Route::get('/incomingTransfer', function () {
    return view('incomingTransfer');
});
Route::get('/mainpage', function () {
    return view('mainpage');
});
Route::get('/outgoingTransfers', function () {
    return view('outgoingTransfers');
});

 Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('dashboard', [LoginController::class, 'dashboard']); 
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [LoginController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');