<?php

use App\Http\Controllers\EmprestimosController;
use App\Http\Controllers\RelatoriosController;


use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AgenciaDeFormentoController;
use App\Http\Controllers\ArquivoController;
use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\RelacoesController;
use App\Http\Controllers\SituacaoDeEntrevistaController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TipoDeAcervoController;
use App\Http\Controllers\TipoDeProjetoController;
use App\Http\Controllers\TipoDerecursoController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PesquisasController;


Route::get('/', function () {
    return view('index');
});

//emprestimos
Route::get('/emprestimos', [EmprestimosController::class, 'index'])->name('a');

//relatorios
Route::get('/relatorios', [RelatoriosController::class, 'index'])->name('b');

//logoff
Route::get('/logoff', function () {
    return view(view: '/sair');
})->name('c');

//ROTAS DE CADASTRO

Route::get('/cadastro', [CadastroController::class, 'cadastro'])->name('cadastro.Cadastro'); // obs: método index do controller


Route::get('/cadastro/agencia-de-formento', [AgenciadeFormentoController::class, 'cadastro'])->name('cadastro.AgenciaDeFormento');

Route::get('/cadastro/curso', [CursoController::class, 'cadastro'])->name('cadastro.Curso');
Route::post('/cadastro/curso', [CursoController::class, 'store'])->name('curso.store');

Route::get('/cadastro/projeto', [ProjetoController::class, 'cadastro'])->name('cadastro.Projeto');

Route::get('/cadastro/arquivo', [ArquivoController::class, 'cadastro'])->name('cadastro.Arquivo');

Route::get('/cadastro/instituicao', [InstituicaoController::class, 'cadastro'])->name('cadastro.Instituicao');

Route::get('/cadastro/pessoa', [PessoaController::class, 'cadastro'])->name('cadastro.Pessoa');

Route::get('/cadastro/relacoes', [RelacoesController::class, 'cadastro'])->name('cadastro.Relacoes');

Route::get('/cadastro/situacao-de-entrevista', [SituacaoDeEntrevistaController::class, 'cadastro'])->name('cadastro.SituacaoDeEntrevista');

Route::get('/cadastro/tema', [TemaController::class, 'cadastro'])->name('cadastro.Tema');

Route::get('/cadastro/tipo-de-acervo', [TipoDeAcervoController::class, 'cadastro'])->name('cadastro.TipoDeAcervo');

Route::get('/cadastro/tipo-de-projeto', [TipoDeProjetoController::class, 'cadastro'])->name('cadastro.TipoDeProjeto');

Route::get('/cadastro/recurso', [RecursoController::class, 'cadastro'])->name('cadastro.TipoDeRecurso');

Route::get('/cadastro/usuario', [CursoController::class, 'cadastro'])->name('cadastro.Usuario');


//ROTAS DE PESQUISA

Route::get('/pesquisas', [PesquisasController::class, 'index']); // obs: método index do controller


Route::get('/pesquisas/agencia-de-formento', [AgenciadeFormentoController::class, 'pesquisas']);

Route::get('/pesquisas/curso', [CursoController::class, 'pesquisas'])->name('pesquisas.Curso');;

Route::get('/pesquisas/projeto', [CadastroController::class, 'pesquisas']);

Route::get('/pesquisas/arquivo', [ArquivoController::class, 'pesquisas']);

Route::get('/pesquisas/instituicao', [InstituicaoController::class, 'pesquisas']);

Route::get('/pesquisas/pessoa', [PessoaController::class, 'pesquisas']);

Route::get('/pesquisas/recurso', [RecursoController::class, 'pesquisas']);

Route::get('/pesquisas/relacoes', [RelacoesController::class, 'pesquisas']);

Route::get('/pesquisas/situacao-de-entrevista', [SituacaoDeEntrevistaController::class, 'pesquisas']);

Route::get('/pesquisas/tema', [TemaController::class, 'pesquisas']);

Route::get('/pesquisas/tipo-de-acervo', [TipoDeAcervoController::class, 'pesquisas']);


