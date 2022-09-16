<?php

use App\Http\Controllers\Admin\Home\HomeController;
use App\Http\Controllers\Admin\User\UserController;
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

Route::get('/index', [HomeController::class, 'index'])->name('index');


Route::prefix('users')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/delete/{user}', [UserController::class, 'delete'])->name('delete');
});