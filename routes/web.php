<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['title'=>'Home']);
})-> name('home');


Route::get('register',[UserController::class,'register'])-> name('register');
Route::post('register',[UserController::class,'register_action'])-> name('register.action');
Route::get('login',[UserController::class,'login'])-> name('login');
Route::post('login',[UserController::class,'login_action'])-> name('login.action');
Route::get('password',[UserController::class,'password'])-> name('password');
// Route::post('password',[UserController::class,'password_action'])-> name('password.action');
// Route::get('logout',[UserController::class,'logout'])-> name('logout');
Route::get('dashboard',[DashboardController::class,'data'])-> name('dashboard');


// Admin route
Route::prefix('/admin')->group(function(){
    Route::get('/', [AdminController::class, 'lists'])->name('admin.home');

});
