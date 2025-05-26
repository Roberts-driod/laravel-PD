<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index']);
Route::post('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::delete('/books/{id}/destroy', [BookController::class, 'destroy']);
Route::get('/books/create', [BookController::class, 'update']);