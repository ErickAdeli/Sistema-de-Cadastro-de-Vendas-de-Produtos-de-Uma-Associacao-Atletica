@extends('layout.principal')

@section('conteudo')

<h1>Dados das Vendas</h1>
<div class="areaForms">
<legend>Dados da Venda</legend>
<p class="marginP">Quantidade Vendida: {{ $venda->qtd_vendida }}</p>
<p class="marginP">ID da Venda: {{ $venda->id }}</p>
<p class="marginP">Produto Vendido: {{ $venda->produto->nome }}</p>
<p class="marginP">Comerciante: {{ $venda->comerciante->nome }}</p>
<p class="marginP">Associado que Comprou: {{ $venda->associado->nome }}</p>

<a class="linkcomobutton" href="{{ route('venda.index') }}">Voltar</a>
<a class="linkcomobutton" href="{{ route('venda.edit', $venda->id) }}">Editar</a>

<form method="post" onsubmit="return confirm('Confirma exclusão da Venda?');" action="{{ route('venda.destroy', $venda->id) }}"">

  @csrf
  @method('DELETE')
  <br>
  <input class="linkcomobutton acompointer" type="submit" value="Excluir">
</div>
</form>

@endsection
