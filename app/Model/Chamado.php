<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
   protected $fillable = [
    'nome_pai',
    'nome_aluno',
    'turma',
    'email',
    'telefone',
    'assunto'
   ];
}
