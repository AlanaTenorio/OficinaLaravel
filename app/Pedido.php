<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  protected $fillable = ['produto_id', 'user_id', 'data'];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function produto()
  {
      return $this->hasOne(Produto::class, 'id', 'produto_id');
  }
}
