@extends('layout.site')

@section('titulo','Home')

@section('conteudo')
    <div class="container main-content">
        <h3 class="text-center post-title marg-top">Ultimas postagens</h3>
        <div class="row marg-top">
        @if (isset($registrosDoacao) && !empty($registrosDoacao))
        @foreach($registrosDoacao as $doacao)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white bg-dark">Tipo do sangue: {{ $doacao->tipo_sangue }}
                    </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $doacao->titulo }}</h5>
                    <p class="card-text">{{ $doacao->descricao }}</p>
                    <a href="{{ route('admin.detalhe', $doacao->id) }}" class="btn btn-primary">Visitar</a>
                </div>
                </div>
            </div>
        @endforeach
        @endif
        </div>
    </div>

@endsection
