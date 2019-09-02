@extends('layout.site')

@section('titulo','Cadastrar Hospital')

@section('conteudo')
<br><br>
<div class="container main-content">
    <form class="" method="POST" action=" {{ route('admin.hospital.salvar') }}">
        {{ csrf_field() }}
        @include('admin.hospital._form')

        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
            <a class="btn btn-outline-dark" href="{{ url()->previous() }}" role="button">Voltar</a>
            </div>
        </div>
    </form>
</div>

@endsection
