@extends('layouts.app')

@section('content')
    <style>
        .divider-custom {
            margin: 1.25rem 0 1.5rem;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .divider-custom .divider-custom-line {
            width: 100%;
            max-width: 7rem;
            height: 0.25rem;
            background-color: #2c3e50;
            border-radius: 1rem;
            border-color: #2c3e50 !important;
        }
        .divider-custom .divider-custom-line:first-child {
            margin-right: 1rem;
        }
        .divider-custom .divider-custom-line:last-child {
            margin-left: 1rem;
        }
        .divider-custom .divider-custom-icon {
            color: #2c3e50 !important;
            font-size: 2rem;
        }
        .divider-custom.divider-light .divider-custom-line {
            background-color: #fff;
        }
        .divider-custom.divider-light .divider-custom-icon {
            color: #fff !important;
        }
        .masthead {
            padding-top: calc(6rem + 74px);
            padding-bottom: 6rem;
        }
        .masthead .masthead-heading {
            font-size: 2.75rem;
            line-height: 2.75rem;
        }
        .masthead .masthead-subheading {
            font-size: 1.25rem;
        }
        .masthead .masthead-avatar {
            width: 15rem;
        }
        .pt-4, .py-4 {
            padding-top: 0rem !important;
        }
        h5 {
            font-size: 1.28571429em;
            font-weight: 700;
            line-height: 1.2857em;
            margin: 0;
        }
        .card {
            font-size: 1em;
            overflow: hidden;
            padding: 0;
            border: none;
            border-radius: .28571429rem;
            box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
        }
        .card-block {
            font-size: 1em;
            position: relative;
            margin: 0;
            padding: 1em;
            border: none;
            border-top: 1px solid rgba(34, 36, 38, .1);
            box-shadow: none;
        }
        .card-img-top {
            display: block;
            width: 100%;
            height: auto;
        }
        .card-title {
            font-size: 1.28571429em;
            font-weight: 700;
            line-height: 1.2857em;
        }
        .card-text {
            clear: both;
            margin-top: .5em;
            color: rgba(0, 0, 0, .68);
        }
        .card-footer {
            font-size: 1em;
            position: static;
            top: 0;
            left: 0;
            max-width: 100%;
            padding: .75em 1em;
            color: rgba(0, 0, 0, .4);
            border-top: 1px solid rgba(0, 0, 0, .05) !important;
            background: #fff;
        }
        .card-inverse .btn {
            border: 1px solid rgba(0, 0, 0, .05);
        }
        .profile-inline ~ .card-title {
            display: inline-block;
            margin-left: 4px;
            vertical-align: top;
        }
        .meta {
            font-size: 1em;
            color: rgba(0, 0, 0, .4);
        }

        .meta a {
            text-decoration: none;
            color: rgba(0, 0, 0, .4);
        }

        .meta a:hover {
            color: rgba(0, 0, 0, .87);
        }
    </style>
    <div class="container-fluid">
        @guest
            <div class="row">
                <div class="masthead col-md-12 text-center text-white" style="background-color: #1ABC9C">
                    <img class="masthead-avatar mb-5" src="{{ asset('images/logo.png') }}" alt="" />
                    <!-- Masthead Heading-->
                    <h1 class="masthead-heading text-uppercase mb-0">SIGMETAS</h1>
                    <!-- Icon Divider-->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Masthead Subheading-->
                    <p class="masthead-subheading font-weight-light mb-0">Olá Seja Bem Vindo!</p>
                    <p class="masthead-subheading font-weight-light mb-0">Ao sistema SISGMETAS
                        Aqui você pode fazer o relato das suas metas com apenas um click.</p>
                </div>
            </div>
        @else
            <div class="row justify-content-center" style="background-color: #F2F2F2">
                <div class="col-sm-6 col-md-5 col-lg-5 mt-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/diarias.jpg') }}">
                        <div class="card-block">
                            <h4 class="card-title mt-3">Tarefas Diárias</h4>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary float-right btn-sm" href="{{ url('TarefasDiarias') }}">Acessar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-5 mt-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/samanal.png') }}">
                        <div class="card-block">
                            <h4 class="card-title mt-3">Tarefas Semanais</h4>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary float-right btn-sm" href="{{ url('TarefasSemanais') }}">Acessar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-5 mt-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/quinzenal.jpg') }}">
                        <div class="card-block">
                            <h4 class="card-title mt-3">Tarefas Quinzenais</h4>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary float-right btn-sm" href="{{ url('TarefasQuinzenais') }}">Acessar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-5 mt-4 mb-2">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/mensal.png') }}">
                        <div class="card-block">
                            <h4 class="card-title mt-3">Tarefas Mensais</h4>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary float-right btn-sm" href="{{ url('TarefasMensais') }}">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endguest
    </div>
    <div class="copyright py-5 text-center text-white" style="padding-bottom: 0px;margin-bottom: -45px">
        <div class="container"><small>Copyright © SIGMETAS {{ date('Y') }}</small></div>
    </div>
@endsection