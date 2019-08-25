<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function cadastrar(){
        return View('produto.cadastrar');
    }

    public function inserir(Request $request){
        $produto = Produto::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
        ]);
        return redirect()->route('exibir',$produto->id);
    }

    public function exibir(Produto $produto){
        return view('produto.exibir',['produto' => $produto]);
    }
}
