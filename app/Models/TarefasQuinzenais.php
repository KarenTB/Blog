<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarefasQuinzenais extends Model
{
    use HasFactory;
    protected $table = "_tarefas_quinzenais";

    protected $fillable = [
        'data', 'justificativa','combate_a_dengue','limpeza_dos_vidros','conservar_persianas',
        'lavar_as_escadas','revisao', 'capachos'
    ];
}