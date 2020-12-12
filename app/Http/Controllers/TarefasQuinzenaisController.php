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
    }
}
