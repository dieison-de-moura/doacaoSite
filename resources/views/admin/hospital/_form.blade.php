<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">
        <input type="text" name="nome" class="form-control" placeholder="Nome do hospital" required autofocus value="{{ isset($registro->nome) ? $registro->nome : '' }}">
    </div>
</div>

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email de contato do Hospital" required value="{{ isset($registro->email) ? $registro->email : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Logadouro</label>
    <div class="col-sm-10">
        <input type="text" name="rua" class="form-control" placeholder="rua, avenida..." required value="{{ isset($registro->rua) ? $registro->rua : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Número</label>
    <div class="col-sm-10">
        <input type="text" name="numero" class="form-control" placeholder="Número do estabelicimento" required value="{{ isset($registro->numero) ? $registro->numero : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Bairro</label>
    <div class="col-sm-10">
        <input type="text" name="bairro" class="form-control" placeholder="Bairro do Hospital" required value="{{ isset($registro->bairro) ? $registro->bairro : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Cidade</label>
    <div class="col-sm-10">
        <input type="text" name="cidade" class="form-control" placeholder="Cidade do Hospital" required value="{{ isset($registro->cidade) ? $registro->cidade : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Estado</label>
    <div class="col-sm-10">
        <input type="text" name="estado" class="form-control" placeholder="Sigla do estado, exemplo: RS, SC, SP" required value="{{ isset($registro->estado) ? $registro->estado : '' }}">
        {{-- <select class="form-control" name="estado" value="{{ isset($registro->estado) ? $registro->estado : '' }}">
                <option>:: Selecione ::</option>
                <option>AC</option>
                <option>AL</option>
                <option>AP</option>
                <option>AM</option>
                <option>BA</option>
                <option>CE</option>
                <option>DF</option>
                <option>ES</option>
                <option>GO</option>
                <option>MA</option>
                <option>MT</option>
                <option>MS</option>
                <option>MG</option>
                <option>PA</option>
                <option>PB</option>
                <option>PR</option>
                <option>PE</option>
                <option>PI</option>
                <option>RJ</option>
                <option>RN</option>
                <option>RS</option>
                <option>RO</option>
                <option>RR</option>
                <option>SC</option>
                <option>SP</option>
                <option>SE</option>
                <option>TO</option>
        </select> --}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Complemento</label>
    <div class="col-sm-10">
        <input type="text" name="complento" class="form-control" placeholder="Complemento, ponto de referência" required value="{{ isset($registro->complento) ? $registro->complento : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Horário</label>
    <div class="col-sm-10">
        <input type="text" name="horario_atendimento" class="form-control" placeholder="Horário que o Hospital atende" required value="{{ isset($registro->horario_atendimento) ? $registro->horario_atendimento : '' }}">
    </div>
</div>
{{-- <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
        <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
    </div>
</div> --}}

{{-- <div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1" required>
            <label class="form-check-label" for="gridCheck1">
                Aceitar os <a href="#">termos e condições de uso</a>
            </label>
        </div>
    </div>
</div> --}}
