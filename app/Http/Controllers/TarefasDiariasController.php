<?php

namespace App\Http\Controllers;

use App\Models\TarefasDiarias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefasDiariasController extends Controller
{
    public function store(Request $request) 
    {
        $tarefas = new TarefasDiarias();
        $data = $request->all();
        $data['data'] = DB::raw("CURDATE()");

        $tarefas->create($data);

        //Verificando se existe tarefa não mascadas
        if ((empty($data['aspirador']) || empty($data['vasos']) 
            || empty($data['limpar_guinches']) || empty($data['lixo'])
            || empty($data['terminais']) || empty($data['ambiente_organizado']) 
            || empty($data['varrer']) || empty($data['lavar_lixeiras']) 
            || empty($data['lavar_pias']))  && empty($data['justificativa']))
            return back()->with('error','Você deixou tarefas sem marcar, adicione a justificativa.');

        //Verificando se foi realmente salvo, e disparando através do back()
        if (!$tarefas->create($data))
            return back()->with('error','Erro ao Inserir.');

        //Caso seja inserindo retorna mesnagem de successo
        return back()->with('success','Tarefas Inseridas com sucesso.');
    }
}
