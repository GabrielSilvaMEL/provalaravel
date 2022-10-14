<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculosManagerController extends Controller
{
    public function index() {
        $veiculos = Veiculo::latest()->paginate(5);
        return view('veiculosmanager.index',compact('veiculos'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function store(Request $request) {
        $veiculo = new Veiculo;
        $veiculo->nome = $request->nomeveiculo;;
        $veiculo->marca = $request->marcaveiculo;
        $veiculo->cor = $request->corveiculo;
        $veiculo->ano = $request->anoveiculo;
        $veiculo->km = $request->kmveiculo;

        try {
            $veiculo->save();
        
            return redirect()->action([VeiculosController::class, 'index'])
                                    ->with('msg','Mensagem enviada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->action([VeiculosController::class, 'index'])
                                    ->with('msg','Falha no envio da mensagem!');
        }
    }

    public function show($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculosmanager.show',compact('veiculo'));
    }
}
