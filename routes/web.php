<?php

use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AgenciaDeFormentoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastro/agenciadeformento', function () {
    return view('cadastro/agenciadeFormento');
});

Route::get('/pesquisas/curso', [CursoController::class, 'index']);

Route::get('/cadastro', [CadastroController::class, 'index']);

Route::get('/cadastro/projeto', [CadastroController::class, 'index']);

Route::get('/cadastro/agencia-de-formento', [AgenciadeFormentoController::class, 'index']);

Route::get('/cadastro/arquivo', [ArquivoController::class, 'index']);

Route::get('/cadastro/instituicao', [InstituicaoController::class, 'index']);

Route::get('/cadastro/pessoa', [PessoaController::class, 'index']);

Route::get('/cadastro/recurso', [RecursoController::class, 'index']);

Route::get('/cadastro/relacoes', [RelacoesController::class, 'index']);

Route::get('/cadastro/situacao-de-entrevista', [SituacaoDeEntrevistaController::class, 'index']);

Route::get('/cadastro/tema', [TemaController::class, 'index']);

Route::get('/cadastro/tipo-de-acervo', [TipoDeAcervoController::class, 'index']);




