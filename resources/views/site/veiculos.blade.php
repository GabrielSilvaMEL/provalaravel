{{-- use Illuminate\Support\Facades\Mail; --}}

@extends('site.layout')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Contatos</h1>
    <hr class="my-4">
    <p class="lead">Nossa equipe está sempre a disposição para ouvir as suas críticas e sugestões. Entre em contato que iremos responder o mais breve possível.</p>
</div>

<div class="container">
    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        <p></p>
    @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nomeContato">Nome:</label>
            <input type="text" class="form-control" id="nomeContato" name="nomeContato">
          </div>
        <div class="form-group">
          <label for="emailContato">Email:</label>
          <input type="email" class="form-control" id="emailContato" name="emailContato" placeholder="fulano@email.com">
        </div>
        <div class="form-group">
          <label for="emailContato">Numero de telefone:</label>
          <input type="number" class="form-control" id="numeroContato" name="telefoneContato" placeholder="99999-9999">
        </div>
        <div class="form-group">
          <label for="mensagemContato">Mensagem:</label>
          <textarea class="form-control" id="mensagemContato" name="mensagemContato" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2" value="Enviar">Enviar</button>
    </form>
</div>
<hr>
@endsection
