<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelCurso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function cadastro()
    {
        return view( view: '/cadastro/curso');
    }

    public function pesquisas()
    {
        return view( view: '/pesquisas/curso');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

        // Exibe o caminho do banco de dados SQLite configurado
        // dd(config('database.connections.sqlite.database'));

        // Validação dos dados
        $validated = $request->validate([
            'nome_curso' => 'required|string|max:255',
            'nivel' => 'required|string|max:100',
        ]);

        // Criação do curso no banco de dados
        ModelCurso::create([
            'nome_curso' => $validated['nome_curso'],
            'nivel' => $validated['nivel'],
        ]);

        // Redireciona com mensagem de sucesso
        return redirect()->route('cadastro.Curso')->with('success', 'Curso cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
