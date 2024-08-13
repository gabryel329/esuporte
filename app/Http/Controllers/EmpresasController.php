<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function index()
    {
        $empresa = Empresas::all();

        return view('administracao.empresa', compact(['empresa']));
    }

    public function store(Request $request)
    {
        // Capitalize the input
        $name = strtoupper(trim($request->input('name')));
        $cnpj = $request->input('cnpj');
    
        // Check if the permission already exists
        $existeEmpresas = Empresas::where('cnpj', $cnpj)->first();
    
        if ($existeEmpresas) {
            return redirect()->route('empresa.index')->with('error', 'Empresa já existe!');
        }
    
        // Create a new permission
        Empresas::create([
            'name' => $name,
            'cnpj' => $cnpj,
        ]);
    
        return redirect()->route('empresa.index')->with('success', 'Empresa cadastrado(a)!');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $empresa = Empresas::find($id);

        if (!$empresa){
            return redirect()->back()->with('error', 'Empresa não encontrada!');
        }

        $empresa->name = strtoupper(trim($request->input('name')));
        $empresa->cnpj = $request->input('cnpj');

        $empresa->save();

        return redirect()->back()->with('success', 'Empresa Atualizado(a) com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empresa = Empresas::findOrFail($id);
    
        $empresa->delete();
    
        return redirect()->route('empresa.index')->with('error', 'Empresa excluído(a) com sucesso!');
    } 
}
