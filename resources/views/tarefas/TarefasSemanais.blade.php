@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="style.css">
<div class="mt-1 mb-2 border-bottom">
    <h2 class="ml-2">Tarefas Semanais</h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1>Marque as Tarefas Realizadas</h1>
        </div>
        <form action="{{ route('create_semanais') }}" method="post">
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
                        <input type="checkbox" name="lavar" id="checkbox1" />
                        <label for="checkbox1">Lavar áreas externas preferencialmente com água de re-uso</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="limpar_poeira" id="checkbox2" />
                        <label for="checkbox2"> Limpar os porta objetos</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="jardinagem" id="checkbox3" />
                        <label for="checkbox3">Pequenas tarefas de jardinagem</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="limpar_tapetes" id="checkbox4" />
                        <label for="checkbox4">Bater e limpar os tapetes</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="moveis" id="checkbox5" />
                        <label for="checkbox5">Remover o pó dos móveis</label>
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
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar" />
            </div>
        </form>
    </div>
</div>
@endsection
