<?php

use Illuminate\Support\Facades\Route;

    //Caminho dos Controllers
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\VeiculosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatosManagerController;
use App\Http\Controllers\VeiculosManagerController;

    //Rotas acessando Controllers (se utilizando controllers)
Route::get('/',[HomeController::class,'index'])->name('site.home');


    //Rotas para ambos métodos get/post dos contatos
Route::get('/contatos', [ContatosController::class, 'index'])->name('site.contatos');
Route::post('/contatos', [ContatosController::class, 'store'])->name('site.contatos');
Route::get('/veiculos', [VeiculosController::class, 'index'])->name('site.veiculos');
Route::post('/veiculos', [VeiculosController::class, 'store'])->name('site.veiculos');


    //Instruções para criação/alteração/exclusão de propriedades de cursos


Route::resource('contatosmanager', ContatosManagerController::class);
Route::resource('veiculosmanager', VeiculosManagerController::class);