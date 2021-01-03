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
        $data['combate_a_dengue'] = isset($data['combate_a_dengue']) && !empty($data['combate_a_dengue']) && $data['combate_a_dengue'] == 'on' ? 1 : 0;
        $data['limpeza_dos_vidros'] = isset($data['limpeza_dos_vidros']) && !empty($data['limpeza_dos_vidros']) && $data['limpeza_dos_vidros'] == 'on' ? 1 : 0;
        $data['conservar_persianas'] = isset($data['conservar_persianas']) && !empty($data['conservar_persianas']) && $data['conservar_persianas'] == 'on' ? 1 : 0;
        $data['lavar_as_escadas'] = isset($data['lavar_as_escadas']) && !empty($data['lavar_as_escadas']) && $data['lavar_as_escadas'] == 'on' ? 1 : 0;
        $data['revisao'] = isset($data['revisao']) && !empty($data['revisao']) && $data['revisao'] == 'on' ? 1 : 0;
        $data['capachos'] = isset($data['capachos']) && !empty($data['capachos']) && $data['capachos'] == 'on' ? 1 : 0;

        //Verificando se existe tarefa não mascadas
        if ((empty($data['combate_a_dengue']) || empty($data['limpeza_dos_vidros'])
            || empty($data['conservar_persianas']) || empty($data['lavar_as_escadas'])
            || empty($data['revisao']) || empty($data['capachos'])) && empty($data['justificativa']))
            return back()->with('error','Você deixou tarefas sem marcar, adicione a justificativa.');

        //Verificando se foi realmente salvo, e disparando através do back()
        if (!$tarefas->create($data))
            return back()->with('error','Erro ao Inserir.');

        //Caso seja inserindo retorna mesnagem de successo
        return back()->with('success','Tarefas Inseridas com sucesso.');
    }
}
