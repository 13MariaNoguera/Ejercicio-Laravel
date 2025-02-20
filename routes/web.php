<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Api\LibroController;

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::resource('libros', LibrosController::class);
Route::resource('socios', SocioController::class);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::apiResource('api/libro', LibroController::class);