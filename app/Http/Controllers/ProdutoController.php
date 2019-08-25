<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function cadastrar(){
        return View('produto.cadastrar');
    }

    public function criar(Request $request){
        $produto = Produto::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
        ]);
        return redirect()->route('exibir',$produto->id);
    }

    public function exibir(Produto $produto){
        return view('produto.exibir',['produto' => $produto]);
    }

    public function editar(Produto $produto){
        return view('produto.editar',['produto' => $produto]);
    }

    public function salvar(Request $request, Produto $produto){
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->save();
        return redirect()->route('exibir',$produto->id);
    }

    public function remover(Produto $produto){
        return view('produto.remover',['produto' => $produto]);
    }

    public function deletar(Produto $produto){
        $produto->delete();
        return redirect()->route('listar');
    }

    public function listar(){
        $produtos = Produto::all();
        return view('produto.listar',['produtos' => $produtos]);
    }
}
