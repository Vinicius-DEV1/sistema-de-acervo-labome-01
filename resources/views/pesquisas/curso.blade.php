@extends('templates.template')

@section('content')

    <p> LISTAGEM DE CURSOS </p>

    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Curso</th>
            <th scope="col">Nivel</th>
            <th scope="col">Criado</th>
            <th scope="col">Atualizado</th>
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
            </tr>
            @endforeach
    </tbody>
</table>

@endsection
