<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TarefasQuinzenais extends Model
{
    use HasFactory;
    protected $table = "_tarefas_quinzenais";

    protected $fillable = [
        'data','user_id', 'justificativa','combate_a_dengue','limpeza_dos_vidros','conservar_persianas',
        'lavar_as_escadas','revisao', 'capachos'
    ];

    public function getResults($data)
    {
        return DB::table('_tarefas_quinzenais as tarefa')
            ->selectRaw("tarefa.id,tarefa.justificativa,DATE_FORMAT(tarefa.data,'%d/%m/%Y') AS data,
            tarefa.combate_a_dengue,tarefa.limpeza_dos_vidros,tarefa.conservar_persianas,tarefa.lavar_as_escadas,
            tarefa.revisao,tarefa.capachos,user.name as usuario")
            ->join('users as user','tarefa.user_id','=','user.id')
            ->whereBetween('tarefa.data',[$data['dt_ini'],$data['dt_fim']])
            ->get();
    }
}