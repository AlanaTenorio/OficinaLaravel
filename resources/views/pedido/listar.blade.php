@extends('layouts.app')
@php($titulo = 'Lista de Pedidos')
@section('titulo', $titulo)
@section('conteudo')
    <div class="card">
    <div class="card-header">Lista de Pedidos</div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Data</th>
                </tr>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{$pedido->produto->nome}}</td>
                        <td>{{$pedido->produto->preco}}</td>
                        <td>{{$pedido->data}}</td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="form-group">
            <a href="{{ route("pedido.cadastrar") }}" class="btn btn-primary " role="button" aria-pressed="true">Comprar</a>
        </div>
    </div>
@endsection
