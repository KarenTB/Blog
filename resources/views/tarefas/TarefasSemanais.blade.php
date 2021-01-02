@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="style.css">
<div class="mt-1 mb-2 border-bottom">
    <h2 class="ml-2">Tarefas Semamanais</h2>
</div>
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
                    <input class="form-check-input" type="checkbox" value="1" name="lavar" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Lavar áreas externas preferencialmente com água de re-uso
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="Limpar_poeira" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        Limpar os porta objetos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="jardinagem" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        Pequenas trefas de jardinagem
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="limpar_tapetes" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        Bater e limpar os tapetes
                    </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="moveis" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Remover o pó dos móveis
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
