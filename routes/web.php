<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'getViewHomePage'])->name('home')->middleware('auth');

Route::get('/403',[UserController::class,'getView403'])->name('403');

Route::prefix('admin')->group(function () {

   Route::get('/login',[AdminController::class,'getViewLoginAdmin'])->name('viewAdminLogin')->middleware('check.login.admin');

   Route::post('/login')->name('adminLogin')->middleware('auth.admin');

   Route::post('/logout',[AdminController::class,'logout'])->name('adminLogout');

   Route::middleware('check.is.admin')->group(function () {
       Route::get('/dashboard',[AdminController::class,'getViewDashboard'])->name('dashboard');
   });
});

Route::get('/login',[UserController::class,'getViewLoginUser'])->name('viewLogin');

Route::post('/login')->name('login')->middleware('auth.user');

