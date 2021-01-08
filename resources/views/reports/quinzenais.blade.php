@extends('layouts.app')

@section('content')
    <div class="mt-1 mb-2 border-bottom">
        <h2 class="ml-2">Relatório de Tarefas Quinzenais</h2>
    </div>
    <div class="container-fluid">
        <form action="{{ route('get_report_quinzenais') }}" method="get">
            @csrf

            <div class="row align-items-end">
                @if(session('error'))
                    <div class="col-md-12 text-center alert alert-danger mt-2">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ session('error') }}</strong>
                    </div>
                @endif

                <div class="col-md-5 mt-2 form-group">
                    <label for="example-date-input" class="col-form-label">Data Inicial</label>
                    <input class="form-control" type="date" name="dt_ini" value="{{ old('dt_ini') }}" id="example-date-input">
                </div>
                <div class="col-md-5 form-group mt-2">
                    <label for="example-date-input" class="col-form-label">Data Final</label>
                    <input class="form-control" type="date" name="dt_fim" value="{{ old('dt_fim') }}" id="example-date-input">
                </div>
                <div class="col-md-2 mt-2 form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        <i class="fas fa-filter"></i> Filtrar
                    </button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12 table-responsive-sm">
                <table class="table table-striped">
                    <thead style="background: #1ABC9C" class="text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">Data</th>
                        <th scope="col">Checklist Combate a Dengue</th>
                        <th scope="col">Limpar Vidros</th>
                        <th scope="col">Conservar Persianas</th>
                        <th scope="col">Lavar Escadas</th>
                        <th scope="col">Revisar Serviços Diarios</th>
                        <th scope="col">Bater e Limpar Capachos</th>
                        <th scope="col">Justificativas</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tarefas as $tarefa)
                        <tr>
                            <th scope="row">{{ $tarefa->id }}</th>
                            <td>{{ $tarefa->usuario }}</td>
                            <td>{{ $tarefa->data }}</td>
                            <td>
                                @if($tarefa->combate_a_dengue == 1)
                                    <span class="badge badge-success">Realizada</span>
                                @else
                                    <span class="badge badge-danger">Não Realizada</span>
                                @endif
                            </td>
                            <td>
                                @if($tarefa->limpeza_dos_vidros == 1)
                                    <span class="badge badge-success">Realizada</span>
                                @else
                                    <span class="badge badge-danger">Não Realizada</span>
                                @endif
                            </td>
                            <td>
                                @if($tarefa->conservar_persianas)
                                    <span class="badge badge-success">Realizada</span>
                                @else
                                    <span class="badge badge-danger">Não Realizada</span>
                                @endif
                            </td>
                            <td>
                                @if($tarefa->lavar_as_escadas)
                                    <span class="badge badge-success">Realizada</span>
                                @else
                                    <span class="badge badge-danger">Não Realizada</span>
                                @endif
                            </td>
                            <td>
                                @if($tarefa->revisao)
                                    <span class="badge badge-success">Realizada</span>
                                @else
                                    <span class="badge badge-danger">Não Realizada</span>
                                @endif
                            </td>
                            <td>
                                @if($tarefa->capachos)
                                    <span class="badge badge-success">Realizada</span>
                                @else
                                    <span class="badge badge-danger">Não Realizada</span>
                                @endif
                            </td>
                            <td style="white-space: pre-wrap">{{ $tarefa->justificativa }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection