<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
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

// Auth
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth','admin'])->group(function(){    
    Route::get('/admin', [DashboardController::class,'index'])->name('admin.dashboard');   
    Route::resource('users', UserController::class);   
});

