<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <title>LABOME - Laboratorio das Memorias e Práticas Cotidianas</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">

    <style>
        /* Estilo geral */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        /* Área para logos acima do menu */
        .logo-area {
            background-color: white;
            padding: 20px 0;
            text-align: center;
            border-bottom: 2px solid #007bff; /* Borda bonita para separar */
        }

        .logo-area img {
            max-height: 80px;
            margin: 0 20px;
        }

        /* Container do menu */
        .menu {
            background-color: white; /* Fundo branco */
            overflow: hidden; /* Evita elementos fora do container */
            border-top: 2px solid #007bff; /* Borda superior bonita */
            border-bottom: 2px solid #007bff; /* Borda inferior bonita */
        }

        /* Itens do menu */
        .menu a {
            float: left; /* Organiza os itens horizontalmente */
            display: block;
            color: #333; /* Cor do texto */
            text-align: center;
            padding: 14px 20px; /* Espaçamento interno */
            text-decoration: none; /* Remove o sublinhado */
            border-right: 1px solid #ddd; /* Borda entre os itens */
        }

        /* Remove a borda direita do último item */
        .menu a:last-child {
            border-right: none;
        }

        /* Efeito de hover */
        .menu a:hover {
            background-color: #007bff; /* Cor de fundo ao passar o mouse */
            color: white; /* Cor do texto ao passar o mouse */
        }

        /* Estilos do footer */
        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>


    <!-- Área para logos -->
    <div class="logo-area">
        <!-- Adicione suas logos aqui -->
        <img src="logo1.png" alt="Logo 1">
        <img src="logo2.png" alt="Logo 2">
        <img src="logo3.png" alt="Logo 3">
    </div>

    <!-- Menu de navegação -->
    <div class="menu">
        <a onclick="window.location.href='/'" >Inicial</a>
        <a onclick="window.location.href='/cadastro'">Cadastros</a>
        <a >Pesquisas</a>
        <a >Empréstimos</a>
        <a >Relatórios</a>
        <a >Sair</a>
    </div>

    <hr> 

    @yield('content')
    
    <hr>
    <footer style="text-align: center; padding: 20px; background-color: #f0f0f0;">
        © 2024 Universidade Estadual Vale do Acaraú
    </footer>

</body>
</html>