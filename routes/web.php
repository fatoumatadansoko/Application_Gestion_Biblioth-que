<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RayonController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RayonController::class, 'index']);


// Routes pour les livres
Route::get('/rayons', [RayonController::class, 'index'])->name('rayons');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');





//Routes pour la partie authentification
// Route::middleware('auth')->group(function () {
Route::get('/login', [AuthController::class, 'ShowLoginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
