@extends('layout.principal')

@section('conteudo')

	<h1>Dados do vendedor</h1>
<div class="areaForms">
<legend>Dados do Vendedor</legend>

	<p class="marginP">Id Comerciante: {{ $comerciante->id}}</p>
	<p class="marginP">Nome: {{ $comerciante->nome}}</p>
	<p class="marginP">Email: {{ $comerciante->email}}</p>
	<p class="marginP">Telefone: {{ $comerciante->telefone}}</p>

	<a class="linkcomobutton" href="/comerciante">Voltar</a>
	<a class="linkcomobutton" href="{{ route('comerciante.edit', $comerciante->id) }}">Editar</a>

	<form method="post" onsubmit="return confirm('Confirma exclusão do Comerciante?');" action="{{ route('comerciante.destroy', $comerciante->id) }}">

  		@csrf
  		@method('DELETE')
  		<br>
  		<input class="linkcomobutton acompointer" type="submit" value="Excluir">
</div>

@endsection('conteudo')