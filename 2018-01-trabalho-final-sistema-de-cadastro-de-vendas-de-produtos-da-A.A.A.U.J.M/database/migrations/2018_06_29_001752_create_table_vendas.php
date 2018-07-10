<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('qtd_vendida');
            $table->integer('produto_id')->unsigned();
            $table->integer('comerciante_id')->unsigned();
            $table->integer('associado_id')->unsigned();
            
            // Relacao -> vendas:produto
            $table->foreign('produto_id')
                      ->references('id')
                      ->on('produtos');

            // Relacao -> vendas:vendedor
            $table->foreign('comerciante_id')
                      ->references('id')
                      ->on('comerciante');

            // Relacao -> vendas:associados
            $table->foreign('associado_id')
                      ->references('id')
                      ->on('associados');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
