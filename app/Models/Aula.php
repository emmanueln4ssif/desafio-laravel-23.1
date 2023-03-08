<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $fillable = [
       'inicio_treino',
       'termino_treino',
       'custo',
       'funcionario_id',
       'aluno_id'
    ];

    //a aula só pode ser dada por um funcionário
    public function funcionario()
    {
        return $this->belongsTo(User::class, 'funcionario_id', 'id');
    }

    //a aula só pode ter um aluno
    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id', 'id');
    }

}
