{{-- use Illuminate\Support\Facades\Mail; --}}

@extends('site.layout')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Veiculos</h1>
    <hr class="my-4">
    <p class="lead">Cadastro de veículos</p>
</div>

<div class="container">
    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        <p></p>
    @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nomeVeiculo">Nome:</label>
            <input type="text" class="form-control" id="nomeVeiculo" name="nomeVeiculo" placeholder="Camaro">
          </div>
        <div class="form-group">
          <label for="marcaVeiculo">Marca:</label>
          <input type="text" class="form-control" id="marcaVeiculo" name="marcaVeiculo" placeholder="Chevrolet">
        </div>
        <div class="form-group">
          <label for="corVeiculo">Cor:</label>
          <input type="text" class="form-control" id="corVeiculo" name="corVeiculo" placeholder="Preto">
        </div>
        <div class="form-group">
          <label for="anoVeiculo">Ano:</label>
          <input type="text" class="form-control" id="anoVeiculo" name="anoVeiculo" placeholder="2000">
        </div>
        <div class="form-group">
          <label for="kmVeiculo">Km:</label>
          <input type="text" class="form-control" id="kmVeiculo" name="kmVeiculo" placeholder="10000">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="file" name="imagem" class="form-control" placeholder="Imagem">
                </div>
            </div>
        <button type="submit" class="btn btn-primary mb-2" value="Enviar">Enviar</button>
    </form>
</div>
<hr>
@endsection
