<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nome'];

     public function livros() {
    	return $this->belongsToMany('App\Livro','livros_tags','tags_id','livros_id');
    }
}
