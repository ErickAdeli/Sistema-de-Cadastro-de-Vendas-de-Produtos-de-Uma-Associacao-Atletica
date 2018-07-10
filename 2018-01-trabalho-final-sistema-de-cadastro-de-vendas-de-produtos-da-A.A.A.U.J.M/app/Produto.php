<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'estoque', 'valor'];

     public function venda() {
    	return $this->hasMany('App\Venda');
    }
}