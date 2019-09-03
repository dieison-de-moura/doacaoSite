@extends('layout.site')

@section('titulo','Home')

@section('conteudo')
    <div class="container main-content">
        <h3 class="text-center post-title">Ultimas postagens</h3>
        <br><br>
        @if (isset($registros) && !empty($registros))
        @foreach($registros as $registro)
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $registro->nome }}</h5>
                    <p class="card-text">{{ $registro->horario_atendimento }}</p>
                    <a href="#" class="btn btn-primary">Visitar</a>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>

@endsection
