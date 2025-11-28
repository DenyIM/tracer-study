<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.bookmark');
});

Route::get('/nav-kuesioner', function () {
    return view('pages.main-kuesioner');
});

Route::get('/nav-leaderboard', function () {
    return view('pages.leaderboard');
});

Route::get('/nav-forum', function () {
    return view('pages.forum');
});

Route::get('/nav-mentor', function () {
    return view('pages.mentor');
});

Route::get('/nav-lowongan', function () {
    return view('pages.list-lowongan');
});

Route::get('/logout', function () {
    return view('pages.homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
