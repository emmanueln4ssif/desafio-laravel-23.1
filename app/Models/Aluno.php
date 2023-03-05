<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'data_nascimento',
        'endereco',
        'telefone',
        'data_cadastro',
        'data_pagamento',
        'data_validade'
    ];

    //um aluno pode ter várias aulas
    public function aulas()
    {
        return $this->hasMany(Aula::class, 'id', 'aluno_id');
    }
    
}
