@extends('layout.principal')

@section('conteudo')

<h1>Vendas</h1>



<table class="customers">

    <tr>
        <th>Quantidade Vendida</th>
        <th>Produto Vendido</th>
        <th>Comerciante</th>
        <th>Associado que Comprou</th>
        <th>Valor unitário</th>
        <th>Valor da compra</th>
        <th>Exibir</th>
        <th>Editar</th>

    </tr>

    @foreach($venda as $v)
    
        <tr>
            <td>{{ $v->qtd_vendida }}</td>
            <td>{{ $v->produto->nome}}</td>
            <td>{{ $v->comerciante->nome }}</td>
            <td>{{ $v->associado->nome }}</td>
            <td>R$ {{ $v->produto->valor}}</td>
            <td>R$ {{ $v->produto->valor*$v->qtd_vendida}}</td>
            <td><a href="{{ route('venda.show', $v->id) }}">Exibir</a></td>
            <td><a href="{{ route('venda.edit', $v->id) }}">Editar</a></td>
        </tr>
    @endforeach

</table>

<a class="linkcomobutton" href="{{ route('venda.create') }}">Inserir Vendas</a>


@endsection('conteudo')