<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RayonController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RayonController::class, 'index']);


// Routes pour les livres
Route::get('/index', [RayonController::class, 'index'])->name('index');
Route::get('/rayons', [RayonController::class, 'affiche'])->name('affiche');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');





//Routes pour la partie authentification
// Route::middleware('auth')->group(function () {
Route::get('/login', [AuthController::class, 'ShowLoginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');




//Routes d'affichage des rayons
Route::get('/rayon', [RayonController::class, 'affiche'])->name('liste_rayon');
//Route d'affichage du formulaire d'ajout de rayon
Route::get('/ajouter/rayon', [RayonController::class, 'ajouter_rayon'])->name('ajouter_rayon');
// Route pour traiter l'ajout d'un article
Route::post('/ajouter/traitement', [RayonController::class, 'ajouter_rayon_traitement'])->name('ajouter_rayon_traitement');
//Route pour modifier les rayons
Route::get('/update_rayon/{id}', [RayonController::class, 'update_rayon'])->name('update_rayon');
Route::post('/update_rayon_traitement/{id}', [RayonController::class, 'update_rayon_traitement'])->name('update_rayon_traitement');
//Route pour supprimer un rayon
Route::get('/delete_rayon/{id}', [RayonController::class, 'delete_rayon'])->name('delete_rayon');
