@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="box">
        <div class="col-6">
            <form action="{{ route('create_mensais') }}" method="post">
                @csrf

                @if(session('error'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ session('error') }}</strong>
                    </div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif

                <h1>Marque as Tarefas Realizadas</h1>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="luminarias">
                    <label class="form-check-label" for="defaultCheck1">
                        Limpar os globos de luz e luminárias
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="estofados">
                    <label class="form-check-label" for="defaultCheck2">
                        Limpar sofás e poltronas utilizando produtos apropriados
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="placas">
                    <label class="form-check-label" for="defaultCheck2">
                        Limpar as placas de aviso
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="pisos">
                    <label class="form-check-label" for="defaultCheck2">
                        Clarear os pisos laváveis
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="superficies">
                    <label class="form-check-label" for="defaultCheck2">
                        Limpar tetos, portas, paredes e rodapés
                    </label>
                </div><br>

                <div class="form-group">
                    <label for="story">Justifique as tarefas não realizadas</label>
                    <textarea id="story" name="justificativa" rows="3" cols="40">
                            </textarea>
                </div>
                <input type="submit" class="btn btn-primary btn-lg" value="Enviar" />
            </form>
        </div>
    </div>
</div>
@endsection
