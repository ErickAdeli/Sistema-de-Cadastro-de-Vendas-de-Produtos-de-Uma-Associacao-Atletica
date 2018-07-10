<?php

namespace App\Http\Controllers;

use App\Comerciante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComercianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {

        $comerciante = Comerciante::all();
        return view('comerciante.index')->with('comerciante', $comerciante);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->type == 1){
            return view ('comerciante.create');
        }else{
                session()->flash('mensagem', 'Acesso negado!');
                return redirect('/comerciate');
        }
        
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
        Comerciante::create($request->all());
        session()->flash('mensagem', 'Comerciante inserido com sucesso!');
        return redirect()->route('comerciante.index');
    }

    
    public function show(Comerciante $comerciante)
    {
        return view('comerciante.show')->with('comerciante', $comerciante);
    }

    
    public function edit(Comerciante $comerciante)
    {
        return view('comerciante.edit')->with('comerciante', $comerciante);
    }

    
    public function update(Request $request, Comerciante $comerciante)
    {
        $comerciante->fill($request->all());
        $comerciante->save();
        session()->flash('mensagem', 'Comerciante atualizado com sucesso!');
        return redirect()->route('comerciante.show', $comerciante->id);

    }

    
    public function destroy(Comerciante $comerciante)
    {
        $comerciante->delete();
        session()->flash('mensagem', 'Comerciante excluído com sucesso!');
        return redirect()->route('comerciante.index');
    }
}