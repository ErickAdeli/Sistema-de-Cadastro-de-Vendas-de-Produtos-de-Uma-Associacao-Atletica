<?php

namespace App\Http\Controllers;
use App\Produto;
use App\Comerciante;
use App\Associado;
use App\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venda = Venda::all();
        return view('venda.index')->with('venda', $venda);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produto = Produto::orderBy('nome')->get();
        $comerciante = Comerciante::orderBy('nome')->get();
        $associado = Associado::orderBy('nome')->get();
        return view('venda.create')->with('produto', $produto)->with('comerciante', $comerciante)->with('associado', $associado);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        
        $produto = Produto::find($request->produto_id); // recebe id do produto vendido
        //$produto = Produto::find($produto->id);
        //$produto->id = $request->produto_id;

       if($request->qtd_vendida< $produto->estoque){ // verifica estoque, se disponivel vende e att estoque.
            Venda::create($request->all());
            $request->session()->flash('mensagem', 'Venda inserida com sucesso!');
            $produto->estoque =  $produto->estoque- $request->qtd_vendida;
            $produto->save(); /// att bd
            return redirect()->route('venda.index');// 
        }else{
            $request->session()->flash('mensagem', 'Quantidade indisponível no estoque');
            return redirect()->route('venda.index');

    }
    }

    public function show(Venda $venda)
    {
        return view('venda.show')->with('venda', $venda);
    }

    
    public function edit(Venda $venda)
    {
        $produto = Produto::orderBy('nome')->get();
        $comerciante = Comerciante::orderBy('nome')->get();
        $associado = Associado::orderBy('nome')->get();
        return view('venda.edit')->with('venda',$venda)->with('produto', $produto)->with('comerciante', $comerciante)->with('associado', $associado);//concertar retornar objeto venda
    }

    
    public function update(Request $request, Venda $venda)
    {
        $venda->qtd_vendida = $request->qtd_vendida;
        $venda->produto_id = $request->produto_id;
        $venda->comerciante_id = $request->comerciante_id;
        $venda->associado_id = $request->associado_id;
        $venda->save();
        $request->session()->flash('mensagem', 'Venda atualizada com sucesso!');
        return redirect()->route('venda.index');
    }

    
    public function destroy(Venda $venda)
    {
        $venda->delete();
        session()->flash('mensagem', 'Venda excluída com sucesso!');
        return redirect()->route('venda.index');
    }
}
