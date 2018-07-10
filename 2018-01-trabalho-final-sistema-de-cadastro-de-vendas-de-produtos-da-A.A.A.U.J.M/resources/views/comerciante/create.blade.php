@extends('layout.principal')

@section('conteudo')

	
<h1>Cadastro de Vendedores</h1>

<div class="areaForms">

	<form method="post" action="{{ route('comerciante.store') }}">
		<fieldset>
		<legend>Inserir Vendedor</legend>
		@csrf

		<p class="marginP">Nome: <input class="inputF" type="text" name="nome"></p>
		<p class="marginP">Email: <input class="inputF" type="text" name="email"></p>
		<p class="marginP">Telefone: <input class="inputF" type="text" name="telefone"></p>
		<input class="acompointer linkcomobutton" type="submit" name="btnIncluir" value="Incluir">
		</fieldset>
	</form>
</div>
@endsection('conteudo')
