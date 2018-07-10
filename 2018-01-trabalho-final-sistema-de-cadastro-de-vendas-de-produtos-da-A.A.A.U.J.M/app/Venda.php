<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = ['qtd_vendida', 'produto_id', 'comerciante_id', 'associado_id'];

    public function comerciante() {
    	return $this->belongsTo('App\Comerciante');
    }

    public function produto() {
    	return $this->belongsTo('App\Produto');
    }

    public function associado() {
    	return $this->belongsTo('App\Associado');
    }
}