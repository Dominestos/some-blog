<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Personal\Liked\DeleteController;
use App\Http\Controllers\Personal\Main\IndexController as PersonalIndexController;
use App\Http\Controllers\Admin\Main\IndexController as AdminIndexController;
use App\Http\Controllers\Personal\Liked\IndexController as LikedIndexController;
use App\Http\Controllers\Personal\Comment\IndexController as CommentIndexController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\UsersController;
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

Route::namespace('App\Http\Controllers\Main')->group(function () {
    Route::get('/', IndexController::class)->name('blog.index');
});

Route::namespace('App\Http\Controllers\Personal')
    ->prefix('personal')
    ->name('personal.')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::namespace('Main')->group(function () {
            Route::get('/', PersonalIndexController::class)->name('main.index');
        });
        Route::namespace('Liked')->prefix('liked')->group(function () {
            Route::get('/', LikedIndexController::class)->name('liked.index');
            Route::delete('/{post}', DeleteController::class)->name('liked.delete');
        });
        Route::namespace('Comment')->prefix('comment')->group(function () {
            Route::get('/', CommentIndexController::class)->name('comment.index');
        });
    });

Route::namespace('App\Http\Controllers\Admin')
    ->prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin', 'verified'])
    ->group(function () {
        Route::namespace('Main')->group(function () {
            Route::get('/', AdminIndexController::class)->name('main.index');
        });
        Route::resources(
            [
                'users' => UsersController::class,
                'categories' => CategoriesController::class,
                'tags' => TagsController::class,
                'posts' => PostsController::class,
            ]
        );
    });

Auth::routes(['verify' => true]);

