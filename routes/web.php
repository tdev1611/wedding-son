<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\TeamBuildingController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminPersonalController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LogoutController;
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



Route::get('/',[WelcomeController::class,'index'])->name('homes');


Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth', 'verified');



//lay out
Route::get('lay-out',[WelcomeController::class,'layout'])->name('layouts-client');

// story
Route::get('thong-tin-studio', [StoryController::class, 'index'])->name('story.index');

// team buidling

Route::get('team-building', [TeamBuildingController::class, 'index'])->name('tbuilding.index');



//admin

Route::group(['middleware' => ['auth', 'verified',], 'prefix' => 'admin'], function () {

    Route::get('/', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
});

//users
Route::group(['middleware' => ['auth', 'verified',], 'prefix' => 'admin/user'], function () {
    Route::get('list', [AdminUsersController::class, 'list_users'])->name('user.list');
    Route::get('add', [AdminUsersController::class, 'add_user'])->name('user.add');
    Route::post('store', [AdminUsersController::class, 'store'])->name('user.store');
    Route::get('edit/{user}', [AdminUsersController::class, 'edit_user'])->name('user.edit');
    Route::post('update/{user}', [AdminUsersController::class, 'update'])->name('user.update');
    Route::get('delete/{user}', [AdminUsersController::class, 'delete'])->name('user.delete');
});


// personal
Route::group(['middleware' => ['auth', 'verified',], 'prefix' => 'admin/personal'], function () {
  
    Route::get('list', [AdminPersonalController::class, 'list'])->name('personal.list');
    Route::get('create', [AdminPersonalController::class, 'create'])->name('personal.create');
    Route::post('store', [AdminPersonalController::class, 'store'])->name('personal.store');
    Route::get('edit/{personal}', [AdminPersonalController::class, 'edit'])->name('personal.edit');
    Route::post('update/{personal}', [AdminPersonalController::class, 'update'])->name('personal.update');
    Route::get  ('delete/{personal}', [AdminPersonalController::class, 'delete'])->name('personal.delete');
});


//logout
Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform')->middleware('auth');
