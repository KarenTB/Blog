@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div id="logo">
                    <h1>
                        <img alt="" src="{{ asset('images/logo.png') }}" width="100" height="150">
                        <span>SISGMETAS</span>
                    </h1>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div id="page-wrapper">
                    <div id="page" class="container-home">
                        <div id="content">
                            <div class="title">
                                <h2>Olá Seja Bem Vindo!</h2>
                                <span class="byline">Ao sistema SISGMETAS</span>
                            </div>
                            <p>Aqui você pode fazer o relato das suas metas com apenas um click.  </a>.</p>
                        </div>
                        <div id="sidebar">
                            <img alt="" class="image image-full" src="{{ asset('images/imagem1.jpg') }}" width="600" height="400"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div id="featured-wrapper">
                    <div id="featured" class="container-home">
                        <div class="major">
                            <h2>SISGMETAS</h2>
                            <span class="byline">© 2020 - 2020 Todos os direitos reservados.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection