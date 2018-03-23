<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->increments('id');
            $table->char('empreendimento',60);
            $table->char('construtora',60);
            $table->char('razao',40)->nullable();;
            $table->char('insmunicipal',60)->nullable();;
            $table->char('insestadual',60)->nullable();;
            $table->char('cnpj',20)->nullable();
            $table->char('cei',20)->nullable();
            $table->char('telefone',15)->nullable();;
            $table->char('contato',30)->nullable();;
            $table->char('enderecofat',60);
            $table->char('cepfat',9);
            $table->char('cidadefat',60)->nullable();
            $table->char('bairrofat',60)->nullable();
            $table->char('enderecocob',60);
            $table->char('cepcob',9);
            $table->char('cidadecob',60)->nullable();
            $table->char('bairrocob',60)->nullable();
            $table->char('enderecoent',60);
            $table->char('cepent',9);
            $table->char('cidadeent',60)->nullable();
            $table->char('bairroent',60)->nullable();
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
        Schema::dropIfExists('obras');
    }
}
