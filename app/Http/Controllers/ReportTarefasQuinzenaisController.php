<?php

namespace App\Http\Controllers;

use App\Models\TarefasQuinzenais;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportTarefasQuinzenaisController extends Controller
{
    protected $model;

    public function __construct(TarefasQuinzenais $quinzenais)
    {
        $this->model = $quinzenais;
    }

    public function index(Request $request)
    {
        $data = $request->all();

        if ($data['dt_ini'] == null || $data['dt_fim'] == null)
            return back()->with('error', 'Informe a data inicial e final.');

        if (Carbon::parse($data['dt_ini'])->diffInDays(Carbon::parse($data['dt_fim'])) > 31)
            return back()->with('error', 'O periodo informado deve ser menor ou igual a 31 dias.');

        return view('reports.quinzenais')
            ->with('tarefas', $this->model->getResults($data));
    }
}
