<?php

namespace App\Http\Controllers;

use App\Models\TarefasMensais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefasMensaisController extends Controller
{
    public function store(Request $request) 
    {
        $tarefas = new TarefasMensais();
        $data = $request->all();
        $data['data'] = DB::raw("CURDATE()");
        $data['luminarias'] = isset($data['luminarias']) && !empty($data['luminarias']) && $data['luminarias'] == 'on' ? 1 : 0;
        $data['estofados'] = isset($data['estofados']) && !empty($data['estofados']) && $data['estofados'] == 'on' ? 1 : 0;
        $data['placas'] = isset($data['placas']) && !empty($data['placas']) && $data['placas'] == 'on' ? 1 : 0;
        $data['pisos'] = isset($data['pisos']) && !empty($data['pisos']) && $data['pisos'] == 'on' ? 1 : 0;
        $data['superficies'] = isset($data['superficies']) && !empty($data['superficies']) && $data['superficies'] == 'on' ? 1 : 0;

        //Verificando se existe tarefa não mascadas
        if ((empty($data['luminarias']) || empty($data['estofados']) || empty($data['placas']) || empty($data['pisos'])
                || empty($data['superficies'])) && empty($data['justificativa']))
            return back()->with('error','Você deixou tarefas sem marcar, adicione a justificativa.');

        //Verificando se foi realmente salvo, e disparando através do back()
        if (!$tarefas->create($data))
            return back()->with('error','Erro ao Inserir.');

        //Caso seja inserindo retorna mesnagem de successo
        return back()->with('success','Tarefas Inseridas com sucesso.');
    }
}
