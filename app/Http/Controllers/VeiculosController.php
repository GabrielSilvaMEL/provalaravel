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
    public function store(Request $request) {
        $veiculo = new Veiculo;
        $veiculo->nome = $request->nomeVeiculo;;
        $veiculo->marca = $request->marcaVeiculo;
        $veiculo->cor = $request->corVeiculo;
        $veiculo->ano = $request->anoVeiculo;
        $veiculo->km = $request->kmVeiculo;

        try {
            $veiculo->save();
        
            return redirect()->action([VeiculosController::class, 'index'])
                                    ->with('msg','Mensagem enviada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->action([VeiculosController::class, 'index'])
                                    ->with('msg','Falha no envio da mensagem!');
        }
    }
}
