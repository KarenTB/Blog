@extends('layouts.app')


@section('content')
<div class="mt-1 mb-2 border-bottom">
    <h2 class="ml-2">Tarefas Quinzenais</h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1>Marque as Tarefas Realizadas</h1>
        </div>
        <form action="{{ route('create_quinzenais') }}" method="post">
            @csrf

            @if(session('error'))
                <div class="col-md-12 text-center alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ session('error') }}</strong>
                </div>
            @endif
            @if(session('success'))
                <div class="col-md-12 text-center alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="combate_a_dengue" id="checkbox1" />
                        <label for="checkbox1">Executar o cheklist de combate a dengue</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="limpeza_dos_vidros" id="checkbox2" />
                        <label for="checkbox2">Limpar vidros em geral nas duas faces</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="conservar_persianas" id="checkbox3" />
                        <label for="checkbox3">Conservar as persianas limpando as com produtos apropriados</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="lavar_as_escadas" id="checkbox4" />
                        <label for="checkbox4">Lavar as escadas</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="revisao" id="checkbox5" />
                        <label for="checkbox5">Revisar os serviços diários</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="capachos" id="checkbox6" />
                        <label for="checkbox6">Bater e limpar os capachos</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group">
                    <label for="story">Justifique as tarefas não realizadas</label>
                    <textarea id="story" class="form-control" name="justificativa" rows="3" cols="40"></textarea>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fas fa-save"></i> Enviar</button>
            </div>
        </form>
    </div>
</div>

@endsection
