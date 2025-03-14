<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Movies\MovieController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
