<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requerDoacao;
use App\Models\Hospital;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //Essas páginas não precisam de autenticação para serem exibidas
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registrosDoacao = requerDoacao::all();
        $registrosHospital = Hospital::all();
        return view('home', compact('registrosHospital', 'registrosDoacao'));
    }

    public function termos()
    {
        return view('admin.termos');
    }

    public function sobre()
    {
        return view('admin.sobre');
    }

    /**
     * @param Int $id id da doação
     */
    public function detalhe($id)
    {
        $registrosDoacao = requerDoacao::find($id);
        $registrosHospital = Hospital::find($registrosDoacao['hospital']);
        // dd($registrosDoacao, $registrosHospital);
        return view('admin.detalhe', compact('registrosHospital', 'registrosDoacao'));
    }
}
