@extends('layouts.app')
@section('titulo','Cadastrar')

@section('conteudo')
    <div class="card">
        <div class="card-header">Cadastrar</div>
        <div class="card-body">
            <form action="{{route('criar')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome" class="control-label">Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ old('nome') }}">

                    @if ($errors->has('nome'))
                      <span class="help-block">
                        <strong>{{ $errors->first('nome') }}</strong>
                      </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="preco" class="control-label">Preço</label>
                    <input type="number" step="0.01" name="preco" class="form-control" value="{{ old('preco') }}">

                    @if ($errors->has('preco'))
                      <span class="help-block">
                        <strong>{{ $errors->first('preco') }}</strong>
                      </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Criar">
                </div>
            </form>
        </div>
    </div>
@endsection
