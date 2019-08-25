@extends('layout.app')
@php($titulo = 'Lista de Produtos')
@section('titulo', $titulo)
@section('conteudo')
    <div class="card">
    <div class="card-header">Lista de Produtos</div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                </tr>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>
                            <a href="{{route('exibir',[$produto->id])}}">
                                {{$produto->nome}}
                            </a>
                        </td>
                        <td>{{$produto->preco}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection