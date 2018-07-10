<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produto = Produto::all();
        return view('produto.index')->with('produto', $produto);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // Validacao
        Produto::create($request->all());
        session()->flash('mensagem', 'Produto inserido com sucesso!');
        return redirect()->route('produto.index');
    }

    
    public function show(Produto $produto)
    {
        return view('produto.show')->with('produto', $produto);
    }
    
    public function edit(Produto $produto)
    {
        return view('produto.edit')->with('produto', $produto);
    }

    
    public function update(Request $request, Produto $produto)
    {
        $produto->fill($request->all());
        $produto->save();
        session()->flash('mensagem', 'Produto atualizado com sucesso!');
        return redirect()->route('produto.show', $produto->id);

    }



    
    public function destroy(Produto $produto)
    {
        $produto->delete();
        session()->flash('mensagem', 'Produto excluído com sucesso!');
        return redirect()->route('produto.index');
    }
}