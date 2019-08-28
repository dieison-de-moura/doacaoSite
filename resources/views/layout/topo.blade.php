<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>>@yield('titulo')</title>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <a class="navbar-brand" href="#">
                    {{-- <img src="img/logodoacao.jpg" width="30" height="30" class="d-inline-block align-top" alt="Doe sangue, doe vida"> --}}
                    <img src="{{ URL::asset('img/logodoacaotrp.jpg') }}" width="30" height="30" class="d-inline-block align-top" alt="Doe sangue, doe vida">
                </a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('site.home') }}">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site.cadastrohospital') }}">Cadastrar Hospital</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ação</a>
                        <a class="dropdown-item" href="#">Outra ação</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Algo mais aqui</a>
                    </div>
                    </li> --}}

                    {{-- <div class="float-right"> --}}
                        @if(Auth::guest())
                            <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="#">Cursos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">{{ Auth::user()->name }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Sair</a></li>
                        @endif
                    {{-- </div> --}}

                </ul>

                {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form> --}}
            </div>
        </nav>
