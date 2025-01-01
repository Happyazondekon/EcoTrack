<?php

use App\Http\Controllers\ArrondissementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BadgeController;
use App\Http\Controllers\CalculController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::inertia('/calcul', 'Calcul')->name('calcul');
Route::inertia('/mission', 'Mission')->name('mission');
Route::inertia('/test', 'Tst')->name('test');
Route::inertia('/articles', 'Articles/Index')->name('articles.all');
Route::inertia('/donation', 'Donation')->name('donation');


// Route::get('/admin', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('admin');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Middleware de l'administrateur s'appelle EnsureUserIsAdmin.php
// INFO: J'ai également créé les middlewares 'auteur' et 'utilisateur'

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::view('/', 'dashboard')->name('admin');

    // Articles
    // Route::resource('articles', ArticleController::class);

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

    Route::resource('departements', DepartementController::class);
    Route::resource('arrondissements', ArrondissementController::class);
    Route::resource('communes', CommuneController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('badges', BadgeController::class);
    Route::resource('donations', DonationController::class);
    Route::resource('commentaires', CommentaireController::class);
    Route::resource('calculs', CalculController::class);
});

Route::middleware('auteur')->group(function () {
    Route::inertia('articles/create', 'Articles/Create')->name('articles.create.frontend');
});

Route::middleware(['role:Administrateur,Auteur'])->group(function () {
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::patch('/articles/{article}/edit', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/arti', function () {
//     return Inertia::render('Article', [
//     ]);
// });

require __DIR__.'/auth.php';
