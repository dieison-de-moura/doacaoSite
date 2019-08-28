@extends('layout.site')

@section('titulo','Home')

@section('conteudo')
    <br><br>
    <div class="container">
        <h3 class="text-center">Ultimas postagens</h3>
        <br><br>
        {{-- @foreach($cursos as $curso) --}}
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Título especial</h5>
                    <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                    <a href="#" class="btn btn-primary">Visitar</a>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Título especial</h5>
                    <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                    <a href="#" class="btn btn-primary">Visitar</a>
                </div>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
        {{-- <div class="row">
        @foreach($cursos as $curso)
            <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img src="{{asset($curso->imagem)}}">
                </div>
                <div class="card-content">
                <h4>{{$curso->titulo}}</h4>
                <p>{{$curso->descricao}}</p>
                </div>
                <div class="card-action">
                <a href="#">Ver mais...</a>
                </div>
            </div>
            </div>
        @endforeach
        </div>
        <div class="row" align="center">
        {{$cursos->links()}}
        </div> --}}

    </div>

@endsection
