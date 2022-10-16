<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::group(['middleware' => ['guest']],function(){
    Route::get('/', [RegisterController::class, 'index'])->name('register');
    Route::post('/', [RegisterController::class, 'store'])->name('validRegister');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authLogin');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});


Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');




