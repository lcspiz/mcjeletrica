<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    //
    protected $table = 'fornecedores';

    protected $fillable = ['cnpj','nome','endereco','numero','cep','complemento','bairro','cidade','telefone','insmunicipal','insestadual','contato'];
}
