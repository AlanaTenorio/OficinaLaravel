@extends('layout.app')
@php($titulo = 'Produto: '.$produto->nome)
@section('titulo',$titulo)
@section('conteudo')
    <div class="card">
    <div class="card-header">{{$produto->nome}} | <a href="{{route('editar',[$produto->id])}}">Editar</a> | <a href="{{route('remover',[$produto->id])}}">Remover</a></div>
        <div class="card-body">
            Preço: {{$produto->preco}}
        </div>
    </div>
@endsection