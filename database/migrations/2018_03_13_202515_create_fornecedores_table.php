<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cnpj',20)->nullable();
            $table->char('nome',60);
            $table->char('insmunicipal',60);
            $table->char('insestadual',60);
            $table->char('contato',60);
            $table->char('endereco',40);
            $table->char('numero',11);
            $table->char('cep',10);
            $table->char('complemento',20);
            $table->char('bairro',30);
            $table->char('cidade',30);
            $table->char('telefone',15)->nullable();
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
        Schema::dropIfExists('fornecedores');
    }
}
