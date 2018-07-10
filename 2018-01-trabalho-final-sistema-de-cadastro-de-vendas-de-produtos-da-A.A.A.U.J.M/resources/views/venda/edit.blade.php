@extends('layout.principal')

@section('conteudo')

    <h1>Atualizar Venda</h1>

    <div class="areaForms" >
    <form method="post" action="{{route('venda.update',$venda->id)}}">
    <legend>Dados da Venda</legend>
        @csrf
        @method('PATCH')

       <p class="marginP"> Quantidade Vendida:</p> 
       <input class="inputF" type="text" name="qtd_vendida"> <br>

        <p class="marginP">Produto:</p>
        <select class="selectF" name="produto_id">
        	<option value="">Selecione:</option>
        	
        	@foreach($produto as $p)
        		<option value="{{ $p->id }}"

        			@if ( $p->id == $venda->produto_id )
        				selected
        			@endif

        			>{{ $p->nome }}</option>
        	@endforeach
        </select><br>

        <p class="marginP">  Comerciante:</p>
        <select class="selectF" name="comerciante_id">
            <option value="">Selecione:</option>
            
            @foreach($comerciante as $c)
                <option value="{{ $c->id }}"

                    @if ( $c->id == $venda->comerciante_id )
                        selected
                    @endif

                    >{{ $c->nome }}</option>
            @endforeach
        </select><br>

         <p class="marginP">Associado:</p>
        <select class="selectF" name="associado_id">
            <option value="">Selecione:</option>
            
            @foreach($associado as $a)
                <option value="{{ $a->id }}"

                    @if ( $a->id == $venda->associado_id )
                        selected
                    @endif

                    >{{ $a->nome }}</option>
            @endforeach
        </select><br>
       
       <input class="linkcomobutton acompointer" type="submit" name="btnSalvar" value="Salvar">

    </form>

<br>
<a class="linkcomobutton acompointer" href="{{route('venda.index')}}">Voltar</a>
</div>
@endsection
