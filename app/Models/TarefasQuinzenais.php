<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarefasQuinzenais extends Model
{
    use HasFactory;
    protected $table = "_tarefas_quinzenais";

    protected $fillable = [
        'data', 'justificativa'
    ];
}
