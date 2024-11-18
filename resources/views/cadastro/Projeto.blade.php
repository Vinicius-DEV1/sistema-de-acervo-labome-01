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
    

    <h1>Cadastro de Projetos</h1>
    <form action="/submit" method="POST">
    <!-- Título do projeto -->
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
    </div>

    <!-- Tipo de projeto -->
    <div class="form-group">
        <label for="tipo">Tipo de projeto*:</label>
        <select id="tipo" name="tipo" required>
            <option value="">Selecione...</option>
            <option value="pesquisa">Pesquisa</option>
            <option value="extensao">Extensão</option>
            <option value="desenvolvimento">Desenvolvimento</option>
            <option value="CADASTRAR">(+) CADASTRAR OUTRO TIPO DE PROJETO</option>
        </select>
    </div>

    <!-- Datas -->
    <div class="form-group">
        <label for="data_inicio">Data de início*:</label>
        <input type="date" id="data_inicio" name="data_inicio" required>
    </div>

    <div class="form-group">
        <label for="data_fim">Data de previsão de término*:</label>
        <input type="date" id="data_fim" name="data_fim" required>
    </div>

    <!-- Financiado -->
    <div class="form-group checkbox-group">
        <label for="financiado">Financiado:</label>
        <input type="checkbox" id="financiado" name="financiado">
    </div>

    <div class="form-group" id="orgao_fomento_group" style="display: none;">
    <label for="orgao_fomento">Órgão de Fomento:</label>
    <select id="orgao_fomento" name="orgao_fomento">
        <option value="">Selecione...</option>
        <option value="cnpq">CNPq</option>
        <option value="fapesp">FAPESP</option>
        <option value="cap">CAPES</option>
        <option value="CADASTRAR">(+) CADASTRAR OUTRO ÓRGÃO</option>
    </select>
    </div>

    <!-- Observações -->
    <div class="form-group">
        <label for="observacoes">Observações:</label>
        <textarea id="observacoes" name="observacoes" rows="3"></textarea>
    </div>

    <!-- Finalizado -->
    <div class="form-group checkbox-group">
        <label for="finalizado">Finalizado:</label>
        <input type="checkbox" id="finalizado" name="finalizado">
    </div>

    <!-- Coordenador -->
    <h3>Coordenador</h3>
    <div class="form-group">
        <label for="coordenador">Nome do Coordenador:</label>
        <input type="text" id="coordenador" name="coordenador" required>
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

    <div class="form-group">
        <label for="curso">Curso:</label>
        <select id="curso" name="curso" required>
            <option value="">Selecione...</option>
            <option value="ciencia_computacao">Ciência da Computação</option>
            <option value="administracao">Administração</option>
            <option value="engenharia">Engenharia</option>
            <option value="CADASTRAR">(+) CADASTRAR OUTRO CURSO</option>
        </select>
    </div>

    <div class="form-group">
        <label for="tipo_coordenador">Tipo de Coordenador:</label>
        <select id="tipo_coordenador" name="tipo_coordenador" required>
            <option value="">Selecione...</option>
            <option value="estudante">Estudante</option>
            <option value="professor">Professor</option>
        </select>
    </div>



    <!-- Campo Nome do Orientador -->
    <div id="orientador-field" class="form-group" style="display: none;">
        <label for="nome-orientador">Nome do Orientador:</label>
        <input type="text" id="nome-orientador" name="nome-orientador" />
    </div>

    <!-- Campo Estudantes Envolvidos -->
    <div id="estudantes-envolvidos" class="form-group" style="display: none;">
        <label>Estudantes Envolvidos:</label>
        <div id="lista-estudantes">
            <!-- Estrutura para adicionar novos estudantes -->
            <div class="estudante">
                <label for="nome-estudante">Nome:</label>
                <input type="text" name="nome-estudante[]" />
                <label for="instituicao-estudante">Instituição:</label>
                <input type="text" name="instituicao-estudante[]" />
                <label for="curso-estudante">Curso:</label>
                <input type="text" name="curso-estudante[]" />
                <label>
                    Bolsista:
                    <input type="checkbox" class="bolsista-checkbox" />
                </label>
                <div class="agencia-field" style="display: none;">
                    <label for="agencia">Agência:</label>
                    <input type="text" name="agencia[]" />
                </div>
            </div>
        </div>
        <button type="button" id="adicionar-estudante">Adicionar Estudante</button>
    </div>


    <!-- Palavras-Chave -->
    <div class="form-group">
        <label for="palavras_chave">Palavras-Chave:</label>
        <input type="text" id="palavras_chave" name="palavras_chave" placeholder="Digite as palavras-chave separadas por vírgula">
    </div>

    <!-- Botão de Enviar -->
    <button type="submit" class="btn">Cadastrar Projeto</button>
    </form>

    <script>
        // SCRIPT DE ESCONDER E EXIBIR ORGAO DE FORMENTO
        document.getElementById('financiado').addEventListener('change', function () {
        const orgaoFomentoGroup = document.getElementById('orgao_fomento_group');
        if (this.checked) {
            orgaoFomentoGroup.style.display = 'flex';
        } else {
            orgaoFomentoGroup.style.display = 'none';
            document.getElementById('orgao_fomento').value = ""; // Reseta o valor do select
        }
    });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tipoCoordenador = document.getElementById('tipo_coordenador');
            const orientadorField = document.getElementById('orientador-field');
            const estudantesEnvolvidos = document.getElementById('estudantes-envolvidos');
            const adicionarEstudanteBtn = document.getElementById('adicionar-estudante');
            const listaEstudantes = document.getElementById('lista-estudantes');

            // Monitora mudanças no tipo de coordenador
            tipoCoordenador.addEventListener('change', function () {
                if (this.value === 'estudante') {
                    orientadorField.style.display = 'flex';
                    estudantesEnvolvidos.style.display = 'none';
                } else if (this.value === 'professor') {
                    orientadorField.style.display = 'none';
                    estudantesEnvolvidos.style.display = 'flex'; // Torna visível
                } else {
                    orientadorField.style.display = 'none';
                    estudantesEnvolvidos.style.display = 'none';
                }
            });

            // Adicionar novos campos de estudantes
            adicionarEstudanteBtn.addEventListener('click', function () {
                const estudanteHTML = `
            <div class="estudante form-group">
                <label for="nome-estudante">Nome:</label>
                <input type="text" name="nome-estudante[]" />
                
                <label for="instituicao-estudante">Instituição:</label>
                <select name="instituicao-estudante[]">
                    <option value="">Selecione...</option>
                    <option value="uva">UVA</option>
                    <option value="uece">UECE</option>
                    <option value="CADASTRAR">(+) CADASTRAR OUTRA INSTITUIÇÃO</option>
                </select>
                
                <label for="curso-estudante">Curso:</label>
                <select name="curso-estudante[]">
                    <option value="">Selecione...</option>
                    <option value="ciencia_computacao">Ciência da Computação</option>
                    <option value="administracao">Administração</option>
                    <option value="engenharia">Engenharia</option>
                    <option value="CADASTRAR">(+) CADASTRAR OUTRO CURSO</option>
                </select>
                
                <label>
                    Bolsista:
                    <input type="checkbox" class="bolsista-checkbox" />
                </label>
                
                <div class="agencia-field" style="display: none;">
                    <label for="agencia">Agência:</label>
                    <select name="agencia[]">
                        <option value="">Selecione...</option>
                        <option value="cnpq">CNPq</option>
                        <option value="fapesp">FAPESP</option>
                        <option value="cap">CAPES</option>
                        <option value="CADASTRAR">(+) CADASTRAR OUTRA AGÊNCIA</option>
                    </select>
                </div>
                
                <button type="button" class="remover-estudante">Remover</button>
            </div>

                `;
                listaEstudantes.insertAdjacentHTML('beforeend', estudanteHTML);
            });

            // Mostrar/ocultar agência ao marcar "Bolsista"
            listaEstudantes.addEventListener('change', function (e) {
                if (e.target.classList.contains('bolsista-checkbox')) {
                    const agenciaField = e.target.closest('.estudante').querySelector('.agencia-field');
                    agenciaField.style.display = e.target.checked ? 'block' : 'none';
                }
            });

            // Remover estudante
            listaEstudantes.addEventListener('click', function (e) {
                if (e.target.classList.contains('remover-estudante')) {
                    e.target.closest('.estudante').remove();
                }
            });
        });

    </script>


@endsection