<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comerciante extends Model
{
    protected $fillable = ['nome', 'telefone', 'email'];

     public function venda() {
    	return $this->hasMany('App\Venda');
    }
}
