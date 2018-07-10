@extends('layout.principal')

@section('conteudo')

	<h1>Inserção de Associados</h1>
<div class="areaForms">
	<form method="post" action="{{route('associado.store')}}">
	<legend>Inserir Associador</legend>
		@csrf

		<p class="marginP">Nome: <input class="inputF" type="text" name="nome"></p>
		<p class="marginP">Telefone: <input class="inputF" type="text" name="telefone"></p>
		<p class="marginP">Email: <input class="inputF" type="text" name="email"></p>
		<p class="marginP">Curso: <input class="inputF" type="text" name="curso"></p>
		<input class="acompointer linkcomobutton" type="submit" name="btnIncluir" value="Incluir">

	</form>
</div>
@endsection('conteudo')