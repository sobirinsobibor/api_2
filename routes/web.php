<?php

use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::resource('book-category', BookCategoryController::class);
Route::resource('editor', EditorController::class);
Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);
Route::apiResource('book', BookController::class)->except([
    'update', 'store'
]);
Route::get('book/category/{category}', [BookController::class, 'getByCategory']);
Route::get('book/editor/{editor}', [BookController::class, 'getByEditor']);
Route::get('book/author/{author}', [BookController::class, 'getByAuthor']);


