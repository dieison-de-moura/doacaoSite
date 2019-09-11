<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\requerDoacao; //colocando a model para poder utilizar metodos para buscar dados na base
use App\Models\Hospital; //colocando a model para poder utilizar metodos para buscar dados na base

class requerDoacaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = requerDoacao::all();
        return view('admin.doacao.index', compact('registros'));
    }

    public function adicionar()
    {
        $registros = Hospital::all();
        return view('admin.doacao.adicionar', compact('registros'));
    }

    //request é utilizado para pegar os dados do POST
    public function salvar(Request $req)
    {
        $dados = $req->all();
        if (!isset($req['ativo'])) {
            $req['ativo'] = "0";
        }
        // dd($req);
        \Session::flash('message', 'Cadastro realizado com sucesso!');
        requerDoacao::create($dados);
        // dd($teste);
        return redirect()->route('admin.doacao');
    }

    //request é utilizado para pegar os dados do POST
    public function editar($id)
    {
        $registro = requerDoacao::find($id);
        $registroHospital = Hospital::find($registro['hospital']);
        // dd($registroHospital);
        return view('admin.doacao.editar', compact('registro', 'registroHospital'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        \Session::flash('message', 'Cadastro atualizado com sucesso!');
        requerDoacao::find($id)->update($dados);
        return redirect()->route('admin.doacao');
    }

    public function deletar($id)
    {
        \Session::flash('message', 'Registro deletado com sucesso!');
        requerDoacao::find($id)->delete();
        return redirect()->route('admin.doacao');
    }
}
