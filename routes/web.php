<?php

use Illuminate\Support\Facades\Route;
// mau include dlu si authControlllernya
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('auth.login');
});
Route::post('/loginprocess', [AuthController::class, 'signIn'])->name('signIn');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/home', function () {
    return view('pages.home');
});
