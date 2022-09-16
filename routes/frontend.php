<?php

use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Language\LanguageController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
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
Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('login');
Route::post('login/post', [LoginController::class, 'login'])->name('login.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/post', [RegisterController::class, 'register'])->name('register.post');

Route::get('language/{language}', [LanguageController::class, 'changeLanguage'])->name('language.change');