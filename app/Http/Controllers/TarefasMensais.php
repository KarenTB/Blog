<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefasMensais extends Controller
{
    public function store(Request $request) 
    {
        $tarefas = new TarefasMensais();
        $data = $request->all();
        $data['data'] = DB::raw("CURDATE()");

        $tarefas->create($data);
    }
}
