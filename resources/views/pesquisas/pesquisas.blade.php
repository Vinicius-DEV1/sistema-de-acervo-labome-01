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

    <h1>Pesquisas</h1>

    <div class="container">
    <!-- Box 1 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.AgenciaDeFormento') }}'">
    <span>Agência de Formento</span>
    </div>

    <!-- Box 2 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.Curso') }}'">
        <span>Curso</span>
    </div>

    <!-- Box 3 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.Instituicao') }}'">
        <span>Instituição</span>
    </div>

    <!-- Box 4 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.Pessoa') }}'">
        <span>Pessoa</span>
    </div>

    <!-- Box 5 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.Projeto') }}'">
        <span>Projeto</span>
    </div>

    <!-- Box 6 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.Recurso') }}'">
        <span>Recurso</span>
    </div>

    <!-- Box 7 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.Relacoes') }}'">
        <span>Relações de Pesquisador e Entrevistado</span>
    </div>

    <!-- Box 8 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.SituacaoDeEntrevista') }}'">
        <span>Situação de Entrevista</span>
    </div>

    <!-- Box 9 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.Tema') }}'">
        <span>Tema</span>
    </div>

    <!-- Box 10 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.TipoDeAcervo') }}'">
        <span>Tipo de acervo</span>
    </div>

    <!-- Box 11 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.TipoDeProjeto') }}'">
        <span>Tipo de Projeto</span>
    </div>

    <!-- Box 12 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.TipoDeRecurso') }}'"">
        <span>Tipo de Recurso</span>
    </div>

    <!-- Box 13 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.Usuario') }}'">
        <span>Usuário</span>
    </div>

    <!-- Box 14 -->
    <div class="box" onclick="window.location.href='{{ route('pesquisas.Arquivo') }}'">
        <span>Arquivos</span>
    </div>

@endsection