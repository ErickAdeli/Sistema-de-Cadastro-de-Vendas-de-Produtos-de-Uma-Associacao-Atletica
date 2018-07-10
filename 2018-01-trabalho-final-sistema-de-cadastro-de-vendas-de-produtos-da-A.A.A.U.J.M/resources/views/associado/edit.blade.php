@extends('layout.principal')

@section('conteudo')

	<h1>Atualização de Associado: Identificação - {{ $associado->id}}</h1>
<div class="areaForms ">
	<form method="post" action="{{route('associado.update', ['associado' => $associado->id])}}">
	<legend>Atualizar Associados</legend>
		@csrf
		@method('PATCH')

		<p class="marginP">Nome: <input class="inputF" type="text" name="nome" value="{{ $associado->nome }}"></p>
		<p class="marginP">Telefone: <input class="inputF" type="text" name="telefone" value="{{ $associado->telefone }}"></p>
		<p class="marginP">Email: <input  class="inputF" type="text" name="email" value="{{ $associado->email }}"></p>
		<p class="marginP">Curso: <input class="inputF" type="text" name="curso" value="{{ $associado->curso }}"></p>
		<input class="linkcomobutton acompointer" type="submit" name="btnAtualizar" value="Atualizar">

	</form>
</div>
@endsection('conteudo')