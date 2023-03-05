<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'data_nascimento',
        'endereco',
        'telefone',
        'periodo_trabalho'
    ];

    //um funcionário pode dar várias aulas
    public function aulas()
    {
        return $this->hasMany(Aula::class, 'id', 'funcionario_id');
    }
    
}
