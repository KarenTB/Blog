@extends('layouts.app')


@section('content')
<div class="mt-1 mb-2 border-bottom">
    <h2 class="ml-2">Tarefas Quinzenais</h2>
</div>
<form action="{{ route('create_quinzenais') }}" method="post">
    <div class="container">
        <div class="box">
            <div class="col-6">
                <h1>Marque as Tarefas Realizadas</h1>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="combate_a_dengue">
                    <label class="form-check-label" for="defaultCheck1">
                        Executar o cheklist de combate a dengue
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="limpeza_dos_vidros">
                    <label class="form-check-label" for="defaultCheck2">
                        Limpar vidros em geral nas duas faces
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="conservar_persianas">
                    <label class="form-check-label" for="defaultCheck2">
                        Conservar as persianas limpando as com produtos apropriados
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="lavar_as_escadas">
                    <label class="form-check-label" for="defaultCheck2">
                        Lavar as escadas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="revisao">
                    <label class="form-check-label" for="defaultCheck2">
                        Revisar os serviços diários
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1"  id="defaultCheck2" name="capachos">
                    <label class="form-check-label" for="defaultCheck2">
                        Bater e limpar os capachos
                    </label>
                </div><br>
                <div class="form-group">
                    <label for="story">Justifique as tarefas não realizadas</label>
                    <textarea id="story" name="justificativa" rows="3" cols="40"></textarea>
                </div>

                <input type="submit" class="btn btn-primary btn-lg" value="SALVAR" />
            </div>
        </div>
    </div>
</form>

@endsection
