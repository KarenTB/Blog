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
        $data['lavar'] = isset($data['lavar']) && !empty($data['lavar']) && $data['lavar'] == 'on' ? 1 : 0;
        $data['limpar_poeira'] = isset($data['limpar_poeira']) && !empty($data['limpar_poeira']) && $data['limpar_poeira'] == 'on' ? 1 : 0;
        $data['jardinagem'] = isset($data['jardinagem']) && !empty($data['jardinagem']) && $data['jardinagem'] == 'on' ? 1 : 0;
        $data['limpar_tapetes'] = isset($data['limpar_tapetes']) && !empty($data['limpar_tapetes']) && $data['limpar_tapetes'] == 'on' ? 1 : 0;
        $data['moveis'] = isset($data['moveis']) && !empty($data['moveis']) && $data['moveis'] == 'on' ? 1 : 0;

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
