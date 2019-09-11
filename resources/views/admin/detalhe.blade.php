@extends('layout.site')

@section('titulo','Detalhe da doação')

@section('conteudo')
    <div class="container main-content">
    <h3 class="text-center post-title marg-top">Detalhe da doação</h3>
        <table class="table table-hover marg-top">
            <thead>
              <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Tipo Sangue</th>
                <th scope="col">Descrição</th>
              </tr>
            </thead>
            @if (isset($registrosDoacao) && !empty($registrosDoacao))
            @foreach ($registrosDoacao as $regDoacao)
            {{-- {{ var_dump($registrosDoacao) }} --}}
            <tbody>
              <tr>
                {{-- <td>{{ $regDoacao->titulo }}</td>
                <td>{{ $regDoacao->tipo_sangue }}</td>
                <td>{{ $regDoacao->descricao }}</td> --}}
              </tr>
            </tbody>
            @endforeach
            @endif
          </table>
    </div>
@endsection
