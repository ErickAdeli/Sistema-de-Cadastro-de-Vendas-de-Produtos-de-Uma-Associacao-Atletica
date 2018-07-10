<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Associado extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'curso'];

     public function venda() {
    	return $this->hasMany('App\Venda');
    }
}