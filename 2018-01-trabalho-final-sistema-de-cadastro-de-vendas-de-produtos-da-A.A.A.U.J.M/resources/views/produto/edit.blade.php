@extends('layout.principal')

@section('conteudo')

	<h1>Dados do Produto: Identificação {{ $produto->id}}</h1>
<div class="areaForms ">
	<form method="post" action="{{route('produto.update', ['produto' => $produto->id])}}">
	<legend>Atualizar produto</legend>
		@csrf
		@method('PATCH')

		<p class="marginP">Nome: <input class="inputF" type="text" name="nome" value="{{ $produto->nome }}"></p>
		<p class="marginP">Estoque: <input class="inputF" type="text" name="estoque" value="{{ $produto->estoque }}"></p>
		<p class="marginP">Valor: <input  class="inputF" type="text" name="valor" value="{{ $produto->valor }}"></p>
		
		
		<input class="linkcomobutton acompointer" type="submit" name="btnAtualizar" value="Atualizar">

	</form>
	</div>
@endsection('conteudo')