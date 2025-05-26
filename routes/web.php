<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/create', [BookController::class, 'create']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::delete('/books/{id}/destroy', [BookController::class, 'destroy']);
Route::put('/books/{id}/update', [BookController::class, 'update']);

Route::get('/books/{id}/updateDates', [BookController::class, 'editDate']);
Route::put('/books/{id}/updateDate', [BookController::class, 'updateDate']);