@extends('templates.template')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f7f7f7;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(5, 1fr); /* 5 itens por linha */
            gap: 20px;
            justify-items: center;
        }

        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 150px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            cursor: pointer; /* Torna o box clicável */
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease; /* Animação de hover */
        }

        /* Efeito de hover - animação */
        .box:hover {
            transform: scale(1.1); /* Aumenta o box ao passar o mouse */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Aumenta a sombra */
            background-color: #e0f7fa; /* Muda a cor de fundo ao passar o mouse */
        }

        .box i {
            font-size: 40px;
            color: #007bff;
        }

        .box span {
            font-size: 16px;
            color: #333;
            font-weight: bold;
        }

        /* Responsividade: Ajusta o grid para telas menores */
        @media (max-width: 1200px) {
            .container {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 900px) {
            .container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 600px) {
            .container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 400px) {
            .container {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <h1>Cadastros</h1>

    <div class="container">
    <!-- Box 1 -->
    <div class="box" onclick="window.location.href='cadastro/agencia-de-formento';">
        <i class="fas fa-project-diagram"></i>
        <span>Agência de Fomento</span>
    </div>



    <!-- Box 2 -->
    <div class="box" onclick="alert('Equipe Clicada!')">
        <i class="fas fa-users"></i>
        <span>Curso</span>
    </div>

    <!-- Box 3 -->
    <div class="box" onclick="alert('Datas Clicadas!')">
        <i class="fas fa-calendar-alt"></i>
        <span>Entrevista</span>
    </div>

    <!-- Box 4 -->
    <div class="box" onclick="alert('Documentos Clicados!')">
        <i class="fas fa-file-alt"></i>
        <span>Instituição</span>
    </div>

    <!-- Box 5 -->
    <div class="box" onclick="alert('Financiamento Clicado!')">
        <i class="fas fa-money-bill-alt"></i>
        <span>Pessoa</span>
    </div>

    <!-- Box 6 -->
    <div class="box" onclick="window.location.href='cadastro/projeto';">
        <i class="fas fa-tasks"></i>
        <span>Projeto</span>
    </div>

    <!-- Box 7 -->
    <div class="box" onclick="alert('Relatórios Clicados!')">
        <i class="fas fa-clipboard-list"></i>
        <span>Recurso</span>
    </div>

    <!-- Box 8 -->
    <div class="box" onclick="alert('Configurações Clicadas!')">
        <i class="fas fa-cogs"></i>
        <span>Relações de Pesquisador e Entrevistado</span>
    </div>

    <!-- Box 9 -->
    <div class="box" onclick="alert('Feedback Clicado!')">
        <i class="fas fa-comment-dots"></i>
        <span>Situação de Entrevista</span>
    </div>

    <!-- Box 10 -->
    <div class="box" onclick="alert('Gestão Clicada!')">
        <i class="fas fa-users-cog"></i>
        <span>Tema</span>
    </div>

    <!-- Box 11 -->
    <div class="box" onclick="alert('Status Clicado!')">
        <i class="fas fa-check-circle"></i>
        <span>Tipo de acervo</span>
    </div>

    <!-- Box 12 -->
    <div class="box" onclick="alert('Progressão Clicada!')">
        <i class="fas fa-chart-line"></i>
        <span>Tipo de Projeto</span>
    </div>

    <!-- Box 13 -->
    <div class="box" onclick="alert('Compartilhamento Clicado!')">
        <i class="fas fa-share-alt"></i>
        <span>Tipo de Recurso</span>
    </div>

    <!-- Box 14 -->
    <div class="box" onclick="alert('Busca Clicada!')">
        <i class="fas fa-search"></i>
        <span>Usuário</span>
    </div>

    <!-- Box 15 -->
    <div class="box" onclick="alert('Busca Clicada!')">
        <i class="fas fa-search"></i>
        <span>Arquivos</span>
    </div>

@endsection