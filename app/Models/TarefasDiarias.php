<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TarefasDiarias extends Model
{
    use HasFactory;
    protected $table = "_tarefas_diarias";

    protected $fillable = [
        'data', 'justificativa','aspirador', 'vasos', 'limpar_guinches', 'lixo','user_id',
        'terminais', 'ambiente_organizado', 'varrer', 'lavar_lixeiras','lavar_pias'
    ];

    public function getResults($data)
    {
        return DB::table('_tarefas_diarias as tarefa')
            ->selectRaw("tarefa.id,tarefa.justificativa,DATE_FORMAT(tarefa.data,'%d/%m/%Y') AS data,
            tarefa.aspirador,tarefa.vasos,tarefa.limpar_guinches,tarefa.lixo,tarefa.terminais,tarefa.ambiente_organizado,
            tarefa.varrer,tarefa.lavar_lixeiras,tarefa.lavar_pias,user.name as usuario")
            ->join('users as user','tarefa.user_id','=','user.id')
            ->whereBetween('tarefa.data',[$data['dt_ini'],$data['dt_fim']])
            ->get();
    }
}