@extends('layout.site')

@section('titulo','Detalhe da doação')

@section('conteudo')
<div class="container main-content">
    <h3 class="text-center post-title marg-top">Detalhe da doação</h3>
    <ul class="list-group marg-top">
        <li class="list-group-item list-group-item-danger">{{ $registrosDoacao->titulo }}</li>
        <li class="list-group-item">Tipo do sangue solicitado: <strong>{{ $registrosDoacao->tipo_sangue }}</strong></li>
        <li class="list-group-item">{{ $registrosDoacao->descricao }}</li>
        <li class="list-group-item">Telefone para contato em caso de duvidas: <strong>{{ $registrosDoacao->telefone }}</strong></li>
    </ul>

    <h3 class="text-center post-title marg-top"></h3>
    <ul class="list-group marg-top">
        <li class="list-group-item list-group-item-danger">Detalhe do Hospital</li>
        <li class="list-group-item">Nome do Hospital: {{ $registrosHospital->nome }}</li>
        <li class="list-group-item">Endereço: {{ $registrosHospital->rua }}, {{ $registrosHospital->numero }}, {{ $registrosHospital->bairro }}, {{ $registrosHospital->cidade }}, {{ $registrosHospital->estado }}</li>
        <li class="list-group-item">Ponto de referencia: {{ $registrosHospital->complento }}</li>
        <li class="list-group-item">Horário de atendimento: {{ $registrosHospital->horario_atendimento }}</li>
    </ul>

    <div class="row marg-top">
        <div class="col-sm-10">
        <a class="btn btn-outline-dark" href="{{ url()->previous() }}" role="button">Voltar</a>
        </div>
    </div>
</div>
@endsection
