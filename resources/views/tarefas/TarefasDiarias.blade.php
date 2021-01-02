@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="style.css">
<div class="mt-1 mb-2 border-bottom">
    <h2 class="ml-2">Tarefas Diarias</h2>
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
                    <input class="form-check-input" type="checkbox" value="1" name="aspirador" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Passar aspirador nos tapetes e carpetes
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="vasos" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Lavar e desinfetar os vasos sanitários
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="limpar_guinches" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Limpar os vidros das divisões, guinchês e portas
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="lixo" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        Recolher, remover e transportar o lixo da area interna
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="terminais" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        Limpar todos os caixas eletrônicos
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="ambiente_organizado"
                        id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Manter o ambiente organizado
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="varrer" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        Varrer areas externas e internas
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="lavar_lixeiras" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Limpar e lavar os depositos de lixo
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="lavar_pias" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Limpar todas as pias e espelhos
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
