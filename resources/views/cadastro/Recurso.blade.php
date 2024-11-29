@extends('templates.template')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f7f7f7;
        }
        form {
            max-width: 800px;
            margin: auto;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fafafa;
        }
        .form-group:hover {
            border-color: #007bff;
            background-color: #f0f8ff;
        }
        .form-group label {
            flex: 1;
            font-weight: bold;
            margin-right: 8px;
            font-size: 14px;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            flex: 2;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            min-height: 60px;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
        }
        .btn {
            display: block;
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        h3 {
            margin-top: 20px;
            font-size: 16px;
        }
    </style>
    <form>
        <h2> Cadastro de Recurso </h2>

        <div class="form-group">
            <label for="nome_agencia">Descrição</label>
            <input type="text" id="nome_agencia" name="nome_agencia" required>
        </div>

        <div class="form-group">
        <label for="instituicao">Instituição:</label>
        <select id="instituicao" name="instituicao" required>
            <option value="">Selecione...</option>
            <option value="uva">UVA</option>
            <option value="uece">UECE</option>
            <option value="CADASTRAR">(+) CADASTRAR OUTRA INSTITUIÇÃO</option>
        </select>
        </div>

        <button type="submit" class="btn">Cadastrar</button>
    </form>

    


@endsection