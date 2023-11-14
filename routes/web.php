<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\UsersController;
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

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function() {
        Route::get('/', Main\IndexController::class)->name('blog.index');
        Route::resources(
            [
                'users' => UsersController::class,
                'categories' => CategoriesController::class,
                'tags' => TagsController::class,
                'posts' => PostsController::class,
            ]
        );
});

Auth::routes();

