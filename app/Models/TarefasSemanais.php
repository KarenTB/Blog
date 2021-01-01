<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarefasSemanais extends Model
{
    use HasFactory;
    protected $table = "_tarefas_semanais";

    protected $fillable = [
        'data', 'justificativa','lavar', 'limpar_poeira', 'jardinagem', 
        'limpar_tapetes', 'moveis'
    ];
}
