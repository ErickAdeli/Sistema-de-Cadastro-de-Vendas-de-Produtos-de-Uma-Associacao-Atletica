@extends('layout.principal')

@section('conteudo')

	<h1>Atualização de Vendedor: {{ $comerciante->id}}</h1>
	<div class="areaForms ">
		<fieldset>
			<legend>Atualizar Vendedor</legend>
		<form method="post" action="{{ route('comerciante.update', ['comerciante' => $comerciante->id]) }}">

			@csrf
			@method('PATCH')

			<p class="marginP">Nome: <input class="inputF" type="text" name="nome" value="{{ $comerciante->nome }}"></p>
			<p class="marginP">Telefone: <input class="inputF" type="text" name="telefone" value="{{ $comerciante->telefone }}"></p>
			<p class="marginP">Email: <input class="inputF" type="text" name="email" value="{{ $comerciante->email }}"></p>
			
			
			<input  class="linkcomobutton acompointer" type="submit" name="btnAtualizar" value="Atualizar">
		</fieldset>
	</form>
	</div>
@endsection('conteudo')