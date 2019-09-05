<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\requerDoacao; //colocando a model para poder utilizar metodos para buscar dados na base

class requerDoacaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.doacao.index');
    }

    public function adicionar()
    {
        return view('admin.doacao.adicionar');
    }

    //request é utilizado para pegar os dados do POST
    public function salvar(Request $req)
    {
        $dados = $req->all();
        \Session::flash('message', 'Cadastro realizado com sucesso!');
        requerDoacao::create($dados);
        return redirect()->route('admin.doacao');
    }

    //request é utilizado para pegar os dados do POST
    public function editar($id)
    {
        $registro = requerDoacao::find($id);
        return view('admin.doacao.editar', compact('registro'));
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
