<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CopyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('authors', AuthorController::class);
Route::resource('categories', CategoryController::class);
Route::resource('books', BookController::class);
Route::resource('copies', CopyController::class);
Route::resource('borrowings', BorrowingController::class);
