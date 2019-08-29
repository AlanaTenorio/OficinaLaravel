@extends('layouts.app')
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

                    @if ($errors->has('nome'))
                      <span class="help-block">
                        <strong>{{ $errors->first('nome') }}</strong>
                      </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="preco" class="control-label">Preço</label>
                    <input type="text" name="preco" class="form-control" value="{{$produto->preco}}">

                    @if ($errors->has('preco'))
                      <span class="help-block">
                        <strong>{{ $errors->first('preco') }}</strong>
                      </span>
                    @endif
                </div>
                <input type="submit" class="btn btn-primary" value="Salvar">
            </form>
        </div>
    </div>
@endsection
