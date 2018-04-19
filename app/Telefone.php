<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = ['cliente_id','descricao','telefone'];

    public function cliente() {
    	return $this->belongsTo('App\Cliente');
    }
}
