<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\DiplomeController;
use App\Http\Controllers\Admin\CompetenceController;
use App\Http\Controllers\Admin\MessagesController;  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\ResumeController;    
use App\Http\Controllers\ContactController;

//Route::get('/', function () {
//    return view('welcome');
//}); il y a les visiteurs, les utilisateurs connectés et les administrateurs.
// Les visiteurs peuvent voir la page d'accueil et les CVs publics, mais pas accéder au dashboard admin.
// Les utilisateurs connectés peuvent voir leur propre CV et accéder à une page de profil, mais pas accéder au dashboard admin.
// Les administrateurs peuvent accéder à toutes les pages, y compris le dashboard admin pour gérer les CVs, les compétences, les expériences, etc.

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Ce groupe garantit que SEUL l'admin connecté accède à ces routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {    
    Route::resource('Competences', CompetenceController::class);
    // Cette ligne unique crée les 7 routes pour le CRUD des expériences !
    Route::resource('experiences', ExperienceController::class);
    Route::resource('/messages', MessagesController::class);
     // Cette ligne unique crée les 7 routes pour le CRUD des projets !
    Route::resource('/projects', ProjetController::class)->except(['index', 'show']);
    // Tu feras la même chose pour diplômes plus tard
    Route::resource('diplomes', DiplomeController::class);
});
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {    
    Route::view('/dashboard/2', 'dashboard_admin')->name('dashboard2');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{id}', [HomeController::class, 'index'])->name('home'); // Route pour afficher le CV d'un utilisateur spécifique (ex: /1 pour l'utilisateur avec ID 1)
Route::get('/contacts', [ContactController::class, 'index'])->name('contact');
Route::post('/contacts', [ContactController::class, 'store'])->name('Mesage.store');
Route::get('/projets', [ProjetController::class, 'index'])->name('projets');
Route::get('/projects/{slug}', [ProjetController::class, 'show'])->name('projects.show');