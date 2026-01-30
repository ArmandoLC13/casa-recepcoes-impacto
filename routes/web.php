<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/quem-somos', [HomeController::class, 'quemSomos'])->name('quem-somos');
Route::get('/contrato', [HomeController::class, 'contrato'])->name('contrato');
Route::get('/termo-responsabilidade', [HomeController::class, 'termoResponsabilidade'])->name('termo-responsabilidade');
Route::get('/galeria', [HomeController::class, 'galeria'])->name('galeria');
Route::get('/endereco', [HomeController::class, 'endereco'])->name('endereco');
Route::get('/orcamento', [HomeController::class, 'orcamento'])->name('orcamento');
Route::post('/orcamento', [HomeController::class, 'enviarOrcamento'])->name('orcamento.enviar');