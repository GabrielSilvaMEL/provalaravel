<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
class VeiculosController extends Controller
{
    public function index() {
        $veiculo = Veiculo::all();

        return view('site.veiculos', ['veiculo' => $veiculo]);
    }

}
