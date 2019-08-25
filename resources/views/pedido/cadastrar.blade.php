@extends('layouts.app')
@section('titulo','Cadastrar')

@section('conteudo')
    <div class="card">
        <div class="card-header">Cadastrar</div>
        <div class="card-body">
            <form action="{{route('pedido.criar')}}" method="post">
                @csrf
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Comprar</th>
                            <th>Nome</th>
                            <th>Preço</th>
                        </tr>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>
                                  <input class="form-check-input" type="radio" name="idProduto" id="idProduto" value="{{$produto->id}}">
                                </td>
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->preco}}</td>

                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Comprar">
                </div>
            </form>
        </div>
    </div>
@endsection
