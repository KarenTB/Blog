@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="style.css">
<div class="mt-1 mb-2 border-bottom">
    <h2 class="ml-2">Tarefas Mensais</h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1>Marque as Tarefas Realizadas</h1>
        </div>
        <form action="{{ route('create_mensais') }}" method="post">
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
                        <input type="checkbox" name="luminarias" id="checkbox1" />
                        <label for="checkbox1">Limpar os globos de luz e luminárias</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="estofados" id="checkbox2" />
                        <label for="checkbox2">Limpar sofás e poltronas utilizando produtos apropriados</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="placas" id="checkbox3" />
                        <label for="checkbox3">Limpar as placas de aviso</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="pisos" id="checkbox4" />
                        <label for="checkbox4">Clarear os pisos laváveis</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="superficies" id="checkbox5" />
                        <label for="checkbox5">Limpar tetos, portas, paredes e rodapés</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group">
                    <label for="story">Justifique as tarefas não realizadas</label>
                    <textarea id="story" class="form-control" name="justificativa" rows="3" cols="40">
                </textarea>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fas fa-save"></i> Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
