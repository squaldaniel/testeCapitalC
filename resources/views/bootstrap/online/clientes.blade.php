@extends('bootstrap.model')
@section('head')
    @include('bootstrap.online.onheader')
@endsection
@section('body')
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nome</td><td>E-mail</td><td>CPF</td><td>Nasc.</td><td>CEP</td><td>Sexo</td>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->cpf}}</td>
                    <td>{{$cliente->nascimento}}</td>
                    <td>{{$cliente->cep}}</td>
                    <td>{{$cliente->sexo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
  {{ $clientes->links() }}
</div>
@endsection
