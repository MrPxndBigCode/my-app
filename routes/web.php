<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view("index");
});

Route::get('abouts',[AdminController::class , 'abouts'])->name("abouts");

Route::get('blogs',[AdminController::class , 'blogs'])->name("blogs");

Route::get('form',[AdminController::class , 'form'])->name("form");

Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
