<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RayonController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RayonController::class, 'index']);


// Routes pour les livres
Route::get('/rayons', [RayonController::class, 'index'])->name('rayons');



//Routes pour la partie authentification
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'register']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

