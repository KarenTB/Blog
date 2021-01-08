<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TarefasMensais extends Model
{
    use HasFactory;
    protected $table = "_tarefas_mensais";

    protected $fillable = [
        'data','user_id', 'justificativa','luminarias','estofados','placas','pisos','superficies'
    ];

    public function getResults($data)
    {
        return DB::table('_tarefas_mensais as tarefa')
            ->selectRaw("tarefa.id,tarefa.justificativa,DATE_FORMAT(tarefa.data,'%d/%m/%Y') AS data,
            tarefa.luminarias,tarefa.estofados,tarefa.placas,tarefa.pisos,tarefa.superficies,user.name as usuario")
            ->join('users as user','tarefa.user_id','=','user.id')
            ->whereBetween('tarefa.data',[$data['dt_ini'],$data['dt_fim']])
            ->get();
    }
}
