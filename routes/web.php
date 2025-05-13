<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
<<<<<<< HEAD
// comica no segundo comite Base de dados MySQL e Migrations sera Seeds e Página Inicial relation e original
=======
>>>>>>> 4b3e48158447039e1cb72165fa86a2095ad11b10
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
<<<<<<< HEAD
    Route::get('/dashboard', [MainController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.edit');
=======
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
>>>>>>> 4b3e48158447039e1cb72165fa86a2095ad11b10
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
