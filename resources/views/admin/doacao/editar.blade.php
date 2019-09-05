@extends('layout.site')

@section('titulo','Editar doação')

@section('conteudo')
<br><br>
<div class="container main-content">
    <form class="" method="post" action=" {{ route('admin.doacao.atualizar', $registro->id) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.doacao._form')

        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-outline-success">Atualizar</button>
            <a class="btn btn-outline-dark" href="{{ url()->previous() }}" role="button">Voltar</a>
            </div>
        </div>
    </form>
</div>

@endsection
