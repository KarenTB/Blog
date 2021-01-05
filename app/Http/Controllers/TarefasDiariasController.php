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
        $data['user_id'] = auth()->id();
        $data['data'] = DB::raw("CURDATE()");
        $data['aspirador'] = isset($data['aspirador']) && !empty($data['aspirador']) && $data['aspirador'] == 'on' ? 1 : 0;
        $data['vasos'] = isset($data['vasos']) && !empty($data['vasos']) && $data['vasos'] == 'on' ? 1 : 0;
        $data['limpar_guinches'] = isset($data['limpar_guinches']) && !empty($data['limpar_guinches']) && $data['limpar_guinches'] == 'on' ? 1 : 0;
        $data['lixo'] = isset($data['lixo']) && !empty($data['lixo']) && $data['lixo'] == 'on' ? 1 : 0;
        $data['terminais'] = isset($data['terminais']) && !empty($data['terminais']) && $data['terminais'] == 'on' ? 1 : 0;
        $data['ambiente_organizado'] = isset($data['ambiente_organizado']) && !empty($data['ambiente_organizado']) && $data['ambiente_organizado'] == 'on' ? 1 : 0;
        $data['varrer'] = isset($data['varrer']) && !empty($data['varrer']) && $data['varrer'] == 'on' ? 1 : 0;
        $data['lavar_lixeiras'] = isset($data['lavar_lixeiras']) && !empty($data['lavar_lixeiras']) && $data['lavar_lixeiras'] == 'on' ? 1 : 0;
        $data['lavar_pias'] = isset($data['lavar_pias']) && !empty($data['lavar_pias']) && $data['lavar_pias'] == 'on' ? 1 : 0;

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
