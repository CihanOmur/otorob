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
    Route::get('/view/{user}', [UserController::class, 'view'])->name('view');
    Route::get('add', [UserController::class, 'add'])->name('add');
    Route::post('create', [UserController::class, 'create'])->name('create');
    Route::get('edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::post('update/{user}', [UserController::class, 'update'])->name('update');
});