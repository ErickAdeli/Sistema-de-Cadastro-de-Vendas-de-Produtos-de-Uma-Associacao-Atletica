@extends('layout.principal')

@section('conteudo')

    <h1>Inserção de Vendas</h1>

   


<div class="areaForms">
    <form class="form-group" method="post" action="{{ route('venda.store') }}">
    <legend>Inserir Venda</legend>
        @csrf
        
        <p class="marginP">Quantidade Vendida: <input class="inputF" type="text" name="qtd_vendida"></p>
        <p class="marginP"> Produto:
          <select class="selectF" name="produto_id">
            <option  value="">Selecione:</option>

            @foreach($produto as $p)
              <option value="{{ $p->id }}">{{ $p->nome }}</option>
            @endforeach
          </select>
          </p>

          <p class="marginP">Comerciante:
          <select class="selectF" name="comerciante_id">
            <option value="">Selecione:</option>
           
            @foreach($comerciante as $c)
              <option value="{{ $c->id }}">{{ $c->nome }}</option>
            @endforeach
          </select>
          </p>

          <p class="marginP">Associado:
          <select class="selectF" name="associado_id">
            <option value="">Selecione:</option>
           
            @foreach($associado as $a)
              <option value="{{ $a->id }}">{{ $a->nome }}</option>
            @endforeach
          </select>
          </p>
          
        <input class="acompointer linkcomobutton" type="submit" name="btnSalvar" value="Salvar">
        
    </form>


</div> 
<a class="acompointer linkcomobutton" href="{{ route('venda.index') }}">Voltar</a>
@endsection
