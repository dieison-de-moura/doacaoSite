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
            {{-- @foreach ($registrosDoacao as $regDoacao) --}}
            {{-- <pre>
            @php(var_dump($registrosDoacao))
            @php(die) --}}
            {{-- {{ var_dump($registrosDoacao) }} --}}
            <tbody>
              <tr>
                <td>{{ $registrosDoacao->titulo }}</td>
                <td>{{ $registrosDoacao->tipo_sangue }}</td>
                <td>{{ $registrosDoacao->descricao }}</td>
              </tr>
            </tbody>
            {{-- @endforeach --}}
            @endif
          </table>
    </div>
@endsection
