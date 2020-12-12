<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarefasMensais extends Model
{
    use HasFactory;
    protected $table = "_tarefas_mensais";

    protected $fillable = [
        'data', 'justificativa','luminarias','estofados','placas','pisos','superficies'
    ];
}
