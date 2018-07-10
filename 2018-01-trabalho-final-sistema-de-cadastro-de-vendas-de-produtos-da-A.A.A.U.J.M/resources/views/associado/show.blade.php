@extends('layout.principal')

@section('conteudo')

	<h1>Dados do Associado</h1>
<div class="areaForms">
	<legend>Dados do Associado</legend>
	<p class="marginP">Id Associado: {{ $associado->id }}</p>
	<p class="marginP">Nome: {{ $associado->nome }}</p>
	<p class="marginP">Telefone: {{ $associado->telefone }}</p>
	<p class="marginP">Email: {{ $associado->email }}</p>
	<p class="marginP">Curso: {{ $associado->curso }}</p>

	<a class="linkcomobutton" href="/associado">Voltar</a>
	<a class="linkcomobutton" href="{{ route('associado.edit', $associado->id) }}">Editar</a>

	<form method="post" onsubmit="return confirm('Confirma exclusão do Associado?');" action="{{ route('associado.destroy', $associado->id) }}">

  		@csrf
  		@method('DELETE')
  		<br>
  		<input class="linkcomobutton acompointer" type="submit" value="Excluir">

	</form>
</div>

@endsection('conteudo')