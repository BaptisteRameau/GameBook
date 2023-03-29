<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ChirpController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/index', [GamesController::class, 'index'])->name('games.index');

Route::get('/login/github', [LoginController::class, 'redirectToGithub']);
 
Route::get('/login/github/callback', [LoginController::class, 'handleCallback']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/games/{slug}', [GamesController::class, 'show'])->name('games.show');
    Route::post('/games/{slug}', [GamesController::class, 'store'])->name('games.store');
    Route::delete('/games/{slug}/{id}', [GamesController::class, 'destroy'])->name('games.destroy');
    Route::get('/games/{slug}/edit/{chirp_id}', [GamesController::class, 'edit'])->name('games.edit');
    Route::patch('/games/{slug}/{chirp_id}', [GamesController::class, 'update'])->name('games.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
