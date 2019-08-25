@extends('layouts.app')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group" align="center">
                        <a href="{{ route("listar") }}" class="btn btn-primary " role="button" aria-pressed="true">Produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
