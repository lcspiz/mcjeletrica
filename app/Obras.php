<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obras extends Model
{
    //
    protected $table = 'obras';

    protected $fillable = ['empreendimento','construtora','razao','insmunicipal','insestadual','cnpj','cei','telefone','contato','enderecofat','cepfat','cidadefat','bairrofat','enderecocob','cepcob','cidadecob','bairrocob','enderecoent','cepent','cidadeent','bairroent'];
}
