<?php

use App\Http\Controllers\Blog\FormController as BlogFormController;
use App\Http\Controllers\Blog\IndexController as BlogIndexController;
use App\Http\Controllers\Blog\ReadController as BlogReadController;
use App\Http\Controllers\Blog\UpdateController as BlogUpdateController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/blogs', [ BlogIndexController::class, 'index' ])->name('index');
Route::get('/blogs/{blog?}', [ BlogFormController::class, 'form' ])->name('form');
Route::post('/blogs/{blog?}', [ BlogUpdateController::class, 'update' ])->name('update');
Route::get('/blogs/read/{blog}', [ BlogReadController::class, 'read' ])->name('read');

require __DIR__.'/auth.php';
