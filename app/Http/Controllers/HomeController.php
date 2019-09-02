<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Hospital; //colocando a model para poder utilizar metodos para buscar dados na base

class HomeController extends Controller
{
    public function index()
    {
        $registros = Hospital::all(); //utilizo isso para trazer todos os registros da base
        return view('home', compact('registros'));
    }
}
