@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="box">
        <div class="col-6">
            <form action="{{ route('create_quinzenais') }}" method="post">
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
                <div class="container">
                    <div class="box">
                        <div class="col-6">
                            <h1>Marque as Tarefas Realizadas</h1>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="combate a dengue" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Executar o cheklist de combate a dengue
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="2" name="Limpeza dos vidros" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                  Limpar vidros em geral nas duas faces
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" name="Conservar persianas" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                  Conservar as persianas limpando as com produtos apropriados
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="4" name="Lavar as escadas" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                  Lavar as escadas
                                </label>
                            </div>    
                            <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="5" name="Revisao" id="defaultCheck2">
                                  <label class="form-check-label" for="defaultCheck2">
                                  Revisar os serviços diários
                                  </label>
                            </div>
                            <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="6" name="capachos"
                                            id="defaultCheck2">
                                  <label class="form-check-label" for="defaultCheck2">
                                  Bater e limpar os capachos
                                  </label>
                            </div>
                            <div class="form-group">
                                  <label for="story">Justifique as tarefas não realizadas</label>
                                  <textarea id="story" name="justificativa" rows="3" cols="40">
                                  </textarea> 
                            </div>

                                  <input type="submit" class="btn btn-primary btn-lg" value="SALVAR" />
            </form>

            @endsection
