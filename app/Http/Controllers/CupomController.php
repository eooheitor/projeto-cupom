<?php

namespace App\Http\Controllers;

use App\Models\Cupom;
use App\Models\Categoria;
use App\View\Grids\CupomGrid;
use Illuminate\Http\Request;

class CupomController
{
    public function index()
    {
        $cupons = Cupom::with('categoria')->orderBy('id')->paginate(10);
        $categorias = Categoria::orderBy('id')->get();
        $grid = new CupomGrid($cupons, $categorias);

        return view('adm.cupons.index', compact('grid', 'cupons', 'categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'tag' => 'required|integer',
            'codigo' => 'required|string|max:100',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        \Illuminate\Support\Facades\DB::enableQueryLog();

        $cupom = Cupom::create([
            'descricao'    => $request->descricao,
            'valor'        => $request->valor,
            'tag'          => $request->tag,
            'codigo'       => $request->codigo,
            'categoria_id' => $request->categoria_id,
        ]);

        dd($cupom, \Illuminate\Support\Facades\DB::getQueryLog());

        return redirect()->route('cupons.index')->with('success', 'Cupom criado com sucesso!');
    }

    public function update(Request $request, Cupom $cupom)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'tag' => 'required|integer',
            'codigo' => 'required|string|max:100|unique:cupons,codigo,' . $cupom->id,
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $cupom->update([
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'tag' => $request->tag,
            'codigo' => $request->codigo,
            'categoria_id' => $request->categoria_id,
        ]);

        return redirect()->route('cupons.index')->with('success', 'Cupom atualizado com sucesso!');
    }

    public function destroy($id = null)
    {
        Cupom::destroy($id);

        return redirect()->route('cupons.index')->with('success', 'Cupom deletado com sucesso!');
    }
}
