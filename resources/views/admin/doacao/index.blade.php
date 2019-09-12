@extends('layout.site')

@section('titulo','Hospitais')

@section('conteudo')
    <div class="container main-content">
        <h3 class="text-center post-title marg-top">Lista de doações</h3>
        @if(\Session::has('message'))
        <p class="alert {{ \Session::get('alert-class', 'alert-success') }}">{{ \Session::get('message') }}</p>
        @endif
        <table class="table table-hover marg-top">
            <thead>
              <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Tipo Sangue</th>
                <th scope="col">Status da solicitação</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            @if (isset($registros) && !empty($registros))
            @foreach ($registros as $registro)
            <tbody>
              <tr>
                <td>{{ $registro->titulo }}</td>
                <td>{{ $registro->tipo_sangue }}</td>
                <td>{{ isset($registro->ativo) && $registro->ativo == 'on' ? 'Válida' : 'Encerrada'}}</td>
                <td class="align-top">
                    <a class="btn btn-outline-primary" href="{{ route('admin.doacao.editar', $registro->id) }}" role="button">Editar</a>
                    <input class="btn btn-outline-danger" type="button" onclick="confirmarDelete()" value="Deletar" />
                </td>
              </tr>
            </tbody>
            @endforeach
            @endif
          </table>
          <div class="row col-md-2">
            {{-- <p id="demo"></p> --}}
            <a class="btn btn-outline-success" href="{{ route('admin.doacao.adicionar') }}" role="button">Adicionar</a>
          </div>
    </div>
@endsection
