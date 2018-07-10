<?php

namespace App\Http\Controllers;

use App\Associado;
use Illuminate\Http\Request;

class AssociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $associado = Associado::all();
        return view('associado.index')->with('associado', $associado);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('associado.create');
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
        Associado::create($request->all());
        session()->flash('mensagem', 'Associado inserido com sucesso!');
        return redirect()->route('associado.index');
    }

    
    public function show(Associado $associado)
    {
        return view('associado.show')->with('associado', $associado);
    }

    
    public function edit(Associado $associado)
    {
        return view('associado.edit')->with('associado', $associado);
    }

    
    public function update(Request $request, Associado $associado)
    {
        $associado->fill($request->all());
        $associado->save();
        session()->flash('mensagem', 'Associado atualizado com sucesso!');
        return redirect()->route('associado.show', $associado->id);

    }

    
    public function destroy(Associado $associado)
    {
        $associado->delete();
        session()->flash('mensagem', 'Associado excluído com sucesso!');
        return redirect()->route('associado.index');
    }
}