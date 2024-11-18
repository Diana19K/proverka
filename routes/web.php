<?php

use App\Http\Controllers\BbController;
use Illuminate\Support\Facades\Route;
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
Route::get('/', [BbController::class, 'index'])->name('index'); 
Route::get('signin', [BbController::class, 'signin'])->name('signin');
Route::post('signin', [AuthController::class, 'signin'])->name('signin');
Route::get('signup', [BbController::class, 'signup'])->name('signup');
Route::post('signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/signup', [BbController::class, 'signup'])->name('signup');
Route::get('/applications', [BbController::class, 'applications'])->name('applications');

