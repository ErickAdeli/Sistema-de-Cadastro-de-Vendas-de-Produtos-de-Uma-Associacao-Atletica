@extends('layout.principal')

@section('conteudo')

	<br><br>
	<h1>Associados</h1>


	<table class="customers">

		<tr>
			
			<th>Id do Associado</th>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Curso</th>
			<th>Exibir</th>
			<th>Editar</th>

		</tr>

		@foreach( $associado as $a )

			<tr>
				<td>{{ $a->id }}</td>
				<td>{{ $a->nome }}</td>
				<td>{{ $a->telefone }}</td>
				<td>{{ $a->email }}</td>
				<td>{{ $a->curso }}</td>
				<td><a href="{{ route('associado.show', $a->id) }}">Exibir</a></td>
				<td><a href="{{ route('associado.edit', $a->id) }}">Editar</a></td>
			</tr>

		@endforeach

	</table>

<!-- CHAMADA DIRETO DIERETA
	<a href="/estados/create">Inserir Estados</a>//-->

	<!-- URL A PARTIR DO NOME DA ROTA //-->
	<a class="linkcomobutton" href="{{ route('associado.create') }}">Inserir Associado</a>
	<!-- A PARTIR DA URL DIRETO 
	<a href="{{ url('estados/create') }}">Inserir Estados</a>//-->

@endsection('conteudo')