<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SISGMETAS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<title>@yield('titulo', 'SISGMETAS')</title>
    <style media="screen"> </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  </head>

  <body>
        <link rel="stylesheet" href="style.css">
      <h1></h1>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/PetShop/public">SISGMETAS </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
             

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/PetShop/public">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tarefas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Relatorios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
        </ul>

        <ul class="navbar-nav navbar-right">
          <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Olá, Usuário
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Minha Conta</a>
                <a class="dropdown-item" href="#">Sair</a>
             </div>
         </li>
      </ul>
    </div>
                    </nav>
                    <div class="container">
                    <div class="box">
                    <div class="col-6">
                    <h1>Marque as Tarefas Realizadas</h1>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Passar aspirador nos tapetes e carpetes 
                      </label>
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Lavar e desinfetar os vasos sanitários 
                      </label>
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Limpar os vidros das divisões, guinchês e portas 
                      </label>
                      </div>
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
                      <label class="form-check-label" for="defaultCheck2">
                        Recolher, remover e transportar o lixo da area interna  
                      </label>
                       </div>
                        <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
                      <label class="form-check-label" for="defaultCheck2">
                        Limpar todos os caixas eletrônicos 
                      </label>
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Manter o ambiente organizado 
                      </label>
                      </div>
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
                      <label class="form-check-label" for="defaultCheck2">
                        Varrer areas externas e internas  
                      </label>
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Limpar e lavar os depositos de lixo 
                      </label>
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Limpar todas as pias e espelhos 
                      </label>
                      </div>
                    <div class="form-group">
                    <label for="story">Justifique as tarefas não realizadas</label>
                    <textarea id="story" name="story" rows="3" cols="40">
                    </textarea>  </div>

                    <button type="button" class="btn btn-primary btn-lg">Enviar</button>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
