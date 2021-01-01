<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarefasDiarias extends Model
{
    use HasFactory;
    protected $table = "_tarefas_diarias";

    protected $fillable = [
        'data', 'justificativa','aspirador', 'vasos', 'limpar_guinches', 'lixo',
        'terminais', 'ambiente_organizado', 'varrer', 'lavar_lixeiras','lavar_pias'
    ];
}