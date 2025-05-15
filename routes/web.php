<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {

// comica no segundo comite Base de dados MySQL e Migrations sera Seeds e Página Inicial relation e original

    if (auth()->check()){
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('login');
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [MainController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/post/create', [MainController::class, 'createPost'])->name('post.create');
    Route::post('/post/create', [MainController::class, 'storePost'])->name('post.store');
    Route::get('/post/delete/{id}', [MainController::class, 'deletePost'])->name('post.delete');
});

require __DIR__.'/auth.php';
