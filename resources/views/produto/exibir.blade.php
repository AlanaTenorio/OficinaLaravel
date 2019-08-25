@extends('layout.app')
@php($titulo = 'Produto: '.$produto->nome)
@section('titulo',$titulo)
@section('conteudo')
    <div class="card">
        <div class="card-header">{{$produto->nome}}</div>
        <div class="card-body">
            Preço: {{$produto->preco}}
        </div>
    </div>
@endsection