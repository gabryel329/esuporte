<?php

namespace App\Http\Controllers;

use App\Models\Responsavel;
use Illuminate\Http\Request;

class ResponsavelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $responsavel = Responsavel::all();

        return view('administracao.responsavel', compact(['responsavel']));
    }

    public function store(Request $request)
    {
        // Capitalize the input
        $nome = ucfirst(trim($request->input('nome')));
        $cpf = $request->input('cpf');
        $celular = $request->input('celular');
    
        // Check if the permission already exists
        $existeResponsavel = Responsavel::where('cpf', $cpf)->first();
    
        if ($existeResponsavel) {
            return redirect()->route('responsavel.index')->with('error', 'Responsável já existe!');
        }
    
        // Create a new permission
        Responsavel::create([
            'nome' => $nome,
            'cpf' => $cpf,
            'celular' => $celular,
        ]);
    
        return redirect()->route('responsavel.index')->with('success', 'Responsável cadastrado(a)!');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $responsavel = Responsavel::find($id);

        if (!$responsavel){
            return redirect()->back()->with('error', 'Responsável não encontrada!');
        }

        $responsavel->nome = ucfirst(trim($request->input('nome')));
        $responsavel->cpf = $request->input('cpf');
        $responsavel->celular = $request->input('celular');

        $responsavel->save();

        return redirect()->back()->with('success', 'Responsável Atualizado(a) com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $responsavel = Responsavel::findOrFail($id);
    
        $responsavel->delete();
    
        return redirect()->route('responsavel.index')->with('error', 'Responsável excluído(a) com sucesso!');
    } 
}
