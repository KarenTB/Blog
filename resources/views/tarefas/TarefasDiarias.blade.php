@extends('layouts.app')


@section('content')
<div class="mt-1 mb-2 border-bottom">
    <h2 class="ml-2">Tarefas Diárias</h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1>Marque as Tarefas Realizadas</h1>
        </div>
        <form action="{{ route('create_diarias') }}" method="post">
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
                        <input type="checkbox" name="aspirador" id="checkbox1" />
                        <label for="checkbox1">Passar aspirador nos tapetes e carpetes</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="vasos" id="checkbox2" />
                        <label for="checkbox2">Lavar e desinfetar os vasos sanitários</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="limpar_guinches" id="checkbox3" />
                        <label for="checkbox3">Limpar os vidros das divisões, guinchês e portas</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="lixo" id="checkbox4" />
                        <label for="checkbox4">Recolher, remover e transportar o lixo da area interna</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="terminais" id="checkbox5" />
                        <label for="checkbox5">Limpar todos os caixas eletrônicos</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="ambiente_organizado" id="checkbox6" />
                        <label for="checkbox6">Manter o ambiente organizado</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="varrer" id="checkbox7" />
                        <label for="checkbox7">Varrer areas externas e internas</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="lavar_lixeiras" id="checkbox8" />
                        <label for="checkbox8">Limpar e lavar os depositos de lixo</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="form-group funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="lavar_pias" id="checkbox9" />
                        <label for="checkbox9">Limpar todas as pias e espelhos</label>
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
