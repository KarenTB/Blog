<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TarefasQuinzenais;
use Illuminate\Support\Facades\DB;

class TarefasQuinzenaisController extends Controller
{
    public function store(Request $request) 
    {
        $tarefas = new TarefasQuinzenais();
        $data = $request->all();
        $data['data'] = DB::raw("CURDATE()");

        $tarefas->create($data);

        //Verificando se existe tarefa não mascadas
        if ((empty($data['combate_dengue']) || empty($data['limpar_vidros'])
                || empty($data['conservar_persianas']) || empty($data['lavar_escadas'])
                || empty($data['revisao']) || empty($data['capachos']) && empty($data['justificativa'])))
            return back()->with('error','Você deixou tarefas sem marcar, adicione a justificativa.');

        //Verificando se foi realmente salvo, e disparando através do back()
        if (!$tarefas->create($data))
            return back()->with('error','Erro ao Inserir.');

        //Caso seja inserindo retorna mesnagem de successo
        return back()->with('success','Tarefas Inseridas com sucesso.');
    }
}
