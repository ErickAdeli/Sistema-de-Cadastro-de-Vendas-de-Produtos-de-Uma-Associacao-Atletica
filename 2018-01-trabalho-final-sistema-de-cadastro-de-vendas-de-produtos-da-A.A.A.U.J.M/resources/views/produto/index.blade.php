@extends('layout.principal')

@section('conteudo')

	<br><br>
	<h1>Produtos</h1>
	


	<table class="customers">

		<tr>
			
			<th>Id do Produto</th>
			<th>Nome</th>
			<th>Estoque</th>
			<th>Valor</th>
			<th>Exibir</th>
			<th>Editar</th>

		</tr>

		@foreach( $produto as $p )

			<tr>
				<td>{{ $p->id }}</td>
				<td>{{ $p->nome }}</td>
				<td>{{ $p->estoque }}</td>
				<td>R${{ $p->valor }}</td>
				<td><a href="{{ route('produto.show', $p->id) }}">Exibir</a></td>
				<td><a href="{{ route('produto.edit', $p->id) }}">Editar</a></td>
			</tr>

		@endforeach

	</table>

<!-- CHAMADA DIRETO DIERETA
	<a href="/estados/create">Inserir Estados</a>//-->

	<!-- URL A PARTIR DO NOME DA ROTA //-->
	<a class="linkcomobutton" href="{{ route('produto.create') }}">Inserir Produtos</a>

	<!-- A PARTIR DA URL DIRETO 
	<a href="{{ url('estados/create') }}">Inserir Estados</a>//-->
@endsection('conteudo')