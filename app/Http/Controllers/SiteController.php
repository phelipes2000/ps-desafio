<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function categorias(Request $request)
    {
        $produtos = Produto::join('categorias', 'categorias.id', '=', 'produtos.categoria_id')->orderBy('produtos.nome', 'asc');
        $categoria_id = $request->categoria_id;
        if ($categoria_id) {
            $produtos->where('categorias.id', $categoria_id);
        }
        $produtos = $produtos->get();
        $categorias = Categoria::orderBy('categoria')->get();
        $categoria = Categoria::find($categoria_id);
        return view('site.categorias', compact('produtos', 'categorias', 'categoria_id', 'categoria'));
    }

    public function produtos()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('site.produtos',  compact('produtos', 'categorias'));
    }
}
