
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Titulo</label>
        <div class="col-sm-10">
            <input type="text" name="titulo" class="form-control" placeholder="Titulo da doação" required autofocus value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Descrição</label>
        <div class="col-sm-10">
            <textarea type="textarea" class="form-control" name="descricao" placeholder="Descrição da doação" required>{{ isset($registro->descricao) ? $registro->descricao : '' }}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tipo do sangue</label>
        <div class="col-sm-10">
            <input type="text" name="tipo_sangue" class="form-control" placeholder="Tipo do sangue que está sendo solicitado" required value="{{ isset($registro->tipo_sangue) ? $registro->tipo_sangue : '' }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Telefone</label>
        <div class="col-sm-10">
            <input type="text" name="telefone" class="form-control" placeholder="Telefone para contato em caso de duvidas" required value="{{ isset($registro->tipo_sangue) ? $registro->tipo_sangue : '' }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Hospital</label>
        <div class="col-sm-10">
        <select class="form-control" name="hospital" required id="">
            @if (isset($registros) && !empty($registros))
            <option value=""> :: Selecione ::</option>
                @foreach ($registros as $reg)
            <option value="{{ isset($reg->id) ? $reg->id : '' }}">{{ isset($reg->nome) ? $reg->nome : '' }}</option>
                @endforeach
                @else
                <option value="{{ isset($registro->hospital) ? $registro->hospital : '' }}">{{ isset($registroHospital->nome) ? $registroHospital->nome : '' }}</option>
            @endif
        </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="gridCheck1">
            Solicitação está ativa?
        </label>
        <div class="col-sm-10">
            <input class="form-check-input" name="ativo" type="checkbox" id="gridCheck1" {{isset($registro->ativo) && $registro->ativo == 'sim' ? 'checked' : '' }} value="true">
        </div>
    </div>

    <input class="form-check-input" name="usuario" type="hidden" value="{{ auth()->user()->id }}">
