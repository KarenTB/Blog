<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TarefasSemanais extends Model
{
    use HasFactory;
    protected $table = "_tarefas_semanais";

    protected $fillable = [
        'data', 'user_id', 'justificativa','lavar', 'limpar_poeira', 'jardinagem',
        'limpar_tapetes', 'moveis'
    ];

    public function getResults($data)
    {
        return DB::table('_tarefas_semanais as tarefa')
            ->selectRaw("tarefa.id,tarefa.justificativa,DATE_FORMAT(tarefa.data,'%d/%m/%Y') AS data,
            tarefa.lavar,tarefa.limpar_poeira,tarefa.jardinagem,tarefa.limpar_tapetes,tarefa.moveis,user.name as usuario")
            ->join('users as user','tarefa.user_id','=','user.id')
            ->whereBetween('tarefa.data',[$data['dt_ini'],$data['dt_fim']])
            ->get();
    }
}
