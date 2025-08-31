<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\View\Grids\CategoriaGrid;
use Illuminate\Http\Request;

class CategoriaController
{
    public function index()
    {
        $categorias = Categoria::orderBy('id')->paginate(10);
        $grid = new CategoriaGrid($categorias);

        return view('adm.categorias.index', compact('grid', 'categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'destaque' => 'nullable|boolean',
            'cor' => 'nullable|string|max:20',
        ]);

        Categoria::create([
            'nome' => $request->nome,
            'destaque' => $request->has('destaque'),
            'cor' => $request->cor,
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoria criada com sucesso!');
    }

    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'destaque' => 'nullable|boolean',
            'cor' => 'nullable|string|max:20',
        ]);

        $categoria->update([
            'nome' => $request->nome,
            'destaque' => $request->has('destaque'),
            'cor' => $request->cor,
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy($id = null)
    {
        Categoria::destroy($id);

        return redirect()->route('categorias.index')->with('success', 'Categoria deletada com sucesso');
    }
}
