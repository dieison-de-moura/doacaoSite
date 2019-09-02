<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    //definindo isso eu posso inserir dados em massa no banco de dados
    protected $fillable = [
        'nome', 'email', 'rua', 'numero','bairro', 'cidade', 'estado', 'complento', 'horario_atendimento'
    ];
}
