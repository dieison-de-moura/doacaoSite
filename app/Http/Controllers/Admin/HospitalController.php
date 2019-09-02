<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hospital; //colocando a model para poder utilizar metodos para buscar dados na base

class HospitalController extends Controller
{
    public function index()
    {
        $registros = Hospital::all(); //utilizo isso para trazer todos os registros da base
        return view('admin.hospital.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.hospital.adicionar');
    }

    //request é utilizado para pegar os dados do POST
    public function salvar(Request $req)
    {
        $dados = $req->all();
        // dd($dados);

        Hospital::create($dados);
        return redirect()->route('admin.hospital');
    }

    //request é utilizado para pegar os dados do POST
    public function editar($id)
    {
        $registro = Hospital::find($id);
        return view('admin.hospital.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        // dd($dados);

        Hospital::find($id)->update($dados);
        return redirect()->route('admin.hospital');
    }

    public function deletar($id)
    {
        Hospital::find($id)->delete();
        return redirect()->route('admin.hospital');
    }
}
