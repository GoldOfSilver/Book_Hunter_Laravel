<?php

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::prefix('/books')->name('books.')->group(function () {
    Route::get('/index', function () {
        return view('books.index');
    })->name('index');

    Route::get('/{book}/{slug}', function (\App\Models\Book $book) {
        return view('books.show', compact('book'));
    })->name('show');
});

Route::prefix('/authors')->name('authors.')->group(function () {
    Route::get('/index', function () {
        return view('authors.index');
    })->name('index');

    Route::get('/{author}/{slug}', function (\App\Models\Author $author) {
        return view('authors.show', compact('author'));
    })->name('show');
});