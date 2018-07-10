@extends('layout.principal')

@section('conteudo')

	<h1>Dados dos produtos</h1>
<div class="areaForms">
<legend>Dados do Produto</legend>
	<p class="marginP">Id Vendedor: {{ $produto->id }}</p>
	<p class="marginP">Nome: {{ $produto->nome }}</p>
	<p class="marginP">Estoque: {{ $produto->estoque }}</p>
	<p class="marginP">Valor: {{ $produto->valor }}</p>

	<a class="linkcomobutton" href="/produto">Voltar</a>
	<a  class="linkcomobutton" href="{{ route('produto.edit', $produto->id) }}">Editar</a>

	<form method="post" onsubmit="return confirm('Confirma exclusão do Produto?');" action="{{ route('produto.destroy', $produto->id) }}">

  		@csrf
  		@method('DELETE')
  		<br>
  		<input class="linkcomobutton acompointer" type="submit" value="Excluir">

	</form>
</div>

@endsection('conteudo')