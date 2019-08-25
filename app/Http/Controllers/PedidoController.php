<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Pedido;
use Auth;
use DateTime;

class PedidoController extends Controller
{
  public function cadastrar(){
    $produtos = Produto::all();
    return view('pedido.cadastrar',['produtos' => $produtos]);
  }

  public function criar(Request $request){
      $pedido = Pedido::create([
          'produto_id' => $request->idProduto,
          'user_id' => Auth::user()->id,
          'data' => new DateTime(),
      ]);
      return redirect()->route('pedido.listar');
  }

  public function listar(){
      $pedidos = Auth::user()->pedidos();
      return view('pedido.listar',['pedidos' => $pedidos]);
  }
}
