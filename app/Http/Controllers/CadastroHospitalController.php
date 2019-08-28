<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroHospitalController extends Controller
{
    public function index()
    {
        return view('layout.cadastroHospital');
    }
}
