@extends('layout.principal')

@section('conteudo')

	<h1>Inserção de Produto</h1>
<div class="areaForms">
<legend>Inserir Produtos</legend>
	<form method="post" action="{{route('produto.store')}}">

		@csrf

		<p class="marginP">Nome: <input class="inputF" type="text" name="nome"></p>
		<p class="marginP">Estoque: <input class="inputF" type="text" name="estoque"></p>
		<p class="marginP">Valor: <input class="inputF" type="text" name="valor"></p>
		<input class="acompointer linkcomobutton" type="submit" name="btnIncluir" value="Incluir">
</div>
	</form>

@endsection('conteudo')