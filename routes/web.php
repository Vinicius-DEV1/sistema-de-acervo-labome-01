<?php

use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastro/agenciadeformento', function () {
    return view('cadastro/agenciadeFormento');
});

Route::get('/pesquisas/cursos', [CursoController::class, 'index']);

Route::get('/cadastro', [CadastroController::class, 'index']);

Route::get('/cadastro/projeto', [ProjetoController::class, 'index']);



