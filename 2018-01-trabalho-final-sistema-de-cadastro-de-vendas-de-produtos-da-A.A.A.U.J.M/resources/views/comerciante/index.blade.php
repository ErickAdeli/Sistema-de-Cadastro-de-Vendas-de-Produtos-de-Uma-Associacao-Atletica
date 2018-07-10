@extends('layout.principal')

@section('conteudo')

	<br><br>

	
	 <h1 >Lista de Vendedores</h1>
	
	
	<!-- CHAMADA DIRETO DIERETA
	<a href="/estados/create">Inserir Estados</a>//-->

	<!-- URL A PARTIR DO NOME DA ROTA //-->
	
	<!-- A PARTIR DA URL DIRETO 
	<a href="{{ url('estados/create') }}">Inserir Estados</a>//-->


	<table class="customers">


		<tr>
			
			<th>Id do Vendedor</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Telefone</th>
			<th>Exibir</th>
			<th>Editar</th>

		</tr>

		@foreach( $comerciante as $c )

			<tr>
				<td>{{ $c->id }}</td>
				<td>{{ $c->nome }}</td>
				<td>{{ $c->email }}</td>
				<td>{{ $c->telefone }}</td>
				<td><a href="{{ route('comerciante.show', $c->id) }}">Exibir</a></td>
				<td><a href="{{ route('comerciante.edit', $c->id) }}">Editar</a></td>
			</tr>

		@endforeach


	</table>

	<a class="linkcomobutton" href="{{ route('comerciante.create') }}">Inserir Comerciante</a>



@endsection('conteudo')