@extends('templates.template')

@section('content')

    <style>
        .table {
            margin-left: 3%;
        }

        /* Definindo o limite de largura baseado no número de caracteres */
        .table td {
            min-width: 10ch; /* Tamanho mínimo (10 caracteres) */
            max-width: 20ch; /* Tamanho máximo (30 caracteres) */
            word-wrap: break-word; /* Permite a quebra de linha se ultrapassar o limite */
            white-space: normal; /* Quebra de linha */
        }

        thead{
            background-color: #f2f2f2;
        }
    </style>

    <style>
        .form-group{
            background-color: #F9F9F9;
            border: 1px solid gray;
            padding: 10px;
        }

        .container {
            display: flex; /* Ativa o Flexbox */
            gap: 20px; /* Espaçamento entre as divs */
            border: 2px dashed gray;
            background-color:#F9F9F9;
            padding: 10px;
        }
    </style>
        
    <form>
        <h2> Listar Curso </h2>

        <div class="container">

            <div id="nome-field" class="form-group">
                <label for="nome-curso">Nome do curso</label>
                <input type="text" id="nome-curso" name="nome-curso" />
            </div>

            <div id="nivel-field" class="form-group">
                <label for="nivel">Nivel</label>
                <input type="text" id="nivel" name="nivel" />
            </div>

            <button type="submit" class="btn btn-primary">Pesquisar</button>

        </div>
        
    </form>

    <hr>

    <table id ="table" class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Curso</th>
            <th scope="col">Nivel</th>
            <th scope="col">Criado</th>
            <th scope="col">Atualizado</th>
            <th scope="col">Ações </th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <th scope="row">{{ $curso->id }}</th>
                <td>{{ $curso->nome_curso }}</td>
                <td>{{ $curso->nivel }}</td>
                <td>{{ $curso->created_at }}</td>
                <td>{{ $curso->updated_at }}</td>
                <td> 
                    <button type="button" class="btn btn-info">E</button>
                    <button type="button" class="btn btn-danger">X</button>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
