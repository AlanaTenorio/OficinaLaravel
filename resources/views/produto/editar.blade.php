@extends('layout.app')
@php($titulo = 'Editar: '.$produto->nome)
@section('titulo',$titulo)
@section('conteudo')
    <div class="card">
    <div class="card-header">{{$produto->nome}}</div>
        <div class="card-body">
            <form action="{{route('salvar',$produto->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome" class="control-label">Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{$produto->nome}}">
                </div>
                <div class="form-group">
                    <label for="preco" class="control-label">Preço</label>
                    <input type="text" name="preco" class="form-control" value="{{$produto->preco}}">
                </div>
                <input type="submit" class="btn btn-primary" value="Salvar">
            </form>
        </div>
    </div>
@endsection