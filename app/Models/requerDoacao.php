<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class requerDoacao extends Model
{
    //definindo isso eu posso inserir dados em massa no banco de dados
    protected $fillable = [
        'titulo', 'tipo_sangue', 'descricao', 'hospital','usuario', 'ativo', 'telefone'
    ];
}
