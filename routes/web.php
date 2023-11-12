<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Main\IndexController;
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

Route::get('/', IndexController::class)->name('blog.index');

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function() {
    Route::get('/', Main\IndexController::class)->name('admin.blog.index');
    Route::resource('categories', CategoryController::class)->names('admin.categories');
});

Auth::routes();

