@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Projeto Laravel - Cadastro de veiculos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success" href="{{ route('site.veiculos') }}">Criar Novo veiculo</a>
    <p></p>
    @if ($message = Session::get('success'))
        <p></p>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Cor</th>
            <th>Ano</th>
            <th>Kilometragem</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($veiculos as $veiculo)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $veiculo->nome }}</td>
            <td>{{ $veiculo->marca }}</td>
            <td>{{ $veiculo->cor }}</td>
            <td>{{ $veiculo->ano }}</td>
            <td>{{ $veiculo->km }}</td>
            <td>
                <form action="{{ route('veiculosmanager.destroy', $veiculo->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('veiculosmanager.show', $veiculo->id) }}">Exibir</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $veiculos->links() !!}
</div>

@endsection
