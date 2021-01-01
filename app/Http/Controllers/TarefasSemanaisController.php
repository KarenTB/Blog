<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TarefasSemanais;
use Illuminate\Support\Facades\DB;

class TarefasSemanaisController extends Controller
{
    public function store(Request $request) 
    {
        $tarefas = new TarefasSemanais();
        $data = $request->all();
        $data['data'] = DB::raw("CURDATE()");

        $tarefas->create($data);
        
        //Verificando se existe tarefa não mascadas
        if ((empty($data['lavar']) || empty($data['limpar_poeira']) || empty($data['jardinagem']) 
                || empty($data['limpar_tapetes']) || empty($data['moveis'])) && empty($data['justificativa']))
            return back()->with('error','Você deixou tarefas sem marcar, adicione a justificativa.');

        //Verificando se foi realmente salvo, e disparando através do back()
        if (!$tarefas->create($data))
            return back()->with('error','Erro ao Inserir.');

        //Caso seja inserindo retorna mesnagem de successo
        return back()->with('success','Tarefas Inseridas com sucesso.');
    }
}
