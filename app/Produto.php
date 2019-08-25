<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'preco', 'user_id'];

    public function pedido(){
      return $this->belongsTo(Pedido::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
