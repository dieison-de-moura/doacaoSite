@extends('layout.site')

@section('titulo','Hospitais')

@section('conteudo')
    <div class="container main-content">
        <h3 class="text-center post-title marg-top">Lista de Hospitais</h3>
        @if(\Session::has('message'))
        <p class="alert {{ \Session::get('alert-class', 'alert-success') }}">{{ \Session::get('message') }}</p>
        @endif
        <table class="table table-hover marg-top">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cidade</th>
                <th scope="col">Atendimento</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            @foreach ($registros as $registro)
            <tbody>
              <tr>
                <td>{{ $registro->nome }}</td>
                <td>{{ $registro->cidade }}</td>
                <td>{{ $registro->horario_atendimento }}</td>
                <td class="align-top">
                    <a class="btn btn-outline-primary" href="{{ route('admin.hospital.editar', $registro->id) }}" role="button">Editar</a>
                    <input class="btn btn-outline-danger" type="button" onclick="confirmarDelete()" value="Deletar" />
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
          <div class="row col-md-2">
            {{-- <p id="demo"></p> --}}
            <a class="btn btn-outline-success" href="{{ route('admin.hospital.adicionar') }}" role="button">Adicionar</a>
          </div>
    </div>
    <script>
            function confirmarDelete()
            {
                var x;
                var r=confirm("Tem certeza que deseja deletar esse registro?");
                if (r==true) {

                // x="você pressionou OK!";
                } else {
                // x="Você pressionou Cancelar!";
                }
                // document.getElementById("demo").innerHTML=x;
            }

            $('.salvar_formulario').on('click', function(){
                var nome_cliente = $('.nome_cliente').val();
                $('#nome_cliente').val(nome_cliente);
                $('.close').click();
                $('#cadastro_cliente').submit();
            });
        </script>
@endsection
