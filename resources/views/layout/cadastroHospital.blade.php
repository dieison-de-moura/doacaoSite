@extends('layout.site')

@section('titulo','Cadastrar Hospital')

@section('conteudo')
<br><br>
<div class="container">
    <form class="" method="POST" action="#">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" name="nome" class="form-control" placeholder="Nome do hospital">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email de contato do Hospital">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Logadouro</label>
            <div class="col-sm-10">
                <input type="text" name="logadouro" class="form-control" placeholder="rua, avenida...">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Número</label>
            <div class="col-sm-10">
                <input type="text" name="numero" class="form-control" placeholder="Número do estabelicimento">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-10">
                <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Aceitar os <a href="#">termos e condições de uso</a>
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>
</div>

@endsection