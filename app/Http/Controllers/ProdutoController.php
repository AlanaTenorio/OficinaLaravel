<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Auth;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    public function cadastrar(){
        return View('produto.cadastrar');
    }

    public function criar(Request $request){
        $validator = Validator::make($request->all(), [
          'nome' => ['required','min:2','max:191'],
          'preco' => ['required','numeric'],
        ]);

        if($validator->fails()){
          return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $produto = Produto::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'user_id' => Auth::user()->id,
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
        $validator = Validator::make($request->all(), [
          'nome' => ['required','min:2','max:191'],
          'preco' => ['required','numeric'],
        ]);

        if($validator->fails()){
          return redirect()->back()->withErrors($validator->errors())->withInput();
        }

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
