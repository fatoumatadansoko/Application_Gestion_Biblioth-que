<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LivreController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', [RayonController::class, 'index']);

// Routes pour les livres

Route::get('/index', [RayonController::class, 'index'])->name('index');
Route::get('/rayons', [RayonController::class, 'affiche'])->name('affiche');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

// Routes pour la partie authentification
// Route::middleware('auth')->group(function () {
Route::get('/login', [AuthController::class, 'ShowLoginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Routes d'affichage des rayons
Route::get('/rayon', [RayonController::class, 'affiche'])->name('liste_rayon');
// Route d'affichage du formulaire d'ajout de rayon
Route::get('/ajouter/rayon', [RayonController::class, 'ajouter_rayon'])->name('ajouter_rayon');
// Route pour traiter l'ajout d'un article
Route::post('/ajouter/traitement', [RayonController::class, 'ajouter_rayon_traitement'])->name('ajouter_rayon_traitement');
// Route pour modifier les rayons
Route::get('/update_rayon/{id}', [RayonController::class, 'update_rayon'])->name('update_rayon');
Route::post('/update_rayon_traitement/{id}', [RayonController::class, 'update_rayon_traitement'])->name('update_rayon_traitement');
// Route pour supprimer un rayon
Route::get('/delete_rayon/{id}', [RayonController::class, 'delete_rayon'])->name('delete_rayon');

// Routes pour les categories
Route::get('/category', [CategoryController::class, 'affichecategory'])->name('liste_category');
// Route d'affichage du formulaire d'ajout de category
Route::get('/ajouter/category', [CategoryController::class, 'ajouter_category'])->name('ajouter_category');
// Route pour traiter l'ajout d'un article
Route::post('/ajoutercategory/traitement', [CategoryController::class, 'ajouter_category_traitement'])->name('ajouter_category_traitement');
// Route pour modifier les Ctégories
Route::get('/update_category/{id}', [CategoryController::class, 'update_category'])->name('update_category');
Route::post('/update_category_traitement/{id}', [CategoryController::class, 'update_category_traitement'])->name('update_category_traitement');
// Route pour supprimer un rayon
Route::get('/delete_category/{id}', [CategoryController::class, 'delete_category'])->name('delete_category');


// Routes pour les livres
Route::get('/livre', [LivreController::class, 'affichelivre'])->name('liste_livre');
// Route d'affichage du formulaire d'ajout de category
Route::get('/ajouter/livre', [LivreController::class, 'ajouter_livre'])->name('ajouter_livre');
// Route pour traiter l'ajout d'un article
Route::post('/ajouterlivre/traitement', [LivreController::class, 'ajouter_livre_traitement'])->name('ajouter_livre_traitement');
// // Route pour modifier les Ctégories
Route::get('/update_livre/{id}', [LivreController::class, 'update_livre'])->name('update_livre');
Route::put('/update_livre_traitement/{id}', [LivreController::class, 'update_livre_traitement'])->name('update_livre_traitement');
// Route pour supprimer un rayon
Route::get('/delete_livre/{id}', [LivreController::class, 'delete_livre'])->name('delete_livre');

