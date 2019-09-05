<div class="form-group row">
        <label class="col-sm-2 col-form-label">Titulo</label>
        <div class="col-sm-10">
            <input type="text" name="titulo" class="form-control" placeholder="Titulo da doação" required autofocus value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Descrição</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="descricao" placeholder="Descrição da doação" required value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tipo do sangue</label>
        <div class="col-sm-10">
            <input type="text" name="tipo_sangue" class="form-control" placeholder="Tipo do sangue que está sendo solicitado" required value="{{ isset($registro->tipo_sangue) ? $registro->tipo_sangue : '' }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Hospital</label>
        <div class="col-sm-10">
            <input type="text" name="hospital" class="form-control" placeholder="Hospital que será feita a doação" required value="{{ isset($registro->hospital) ? $registro->hospital : '' }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="gridCheck1">
            Solicitação está ativa?
        </label>
        <div class="col-sm-10">
            <input class="form-check-input" name="ativo" type="checkbox" id="gridCheck1" required>
        </div>
    </div>

    <input class="form-check-input" name="usuario" type="hidden">
