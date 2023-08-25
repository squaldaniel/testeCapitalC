@extends('bootstrap.model')
@section('head')
    @include('bootstrap.online.onheader')
@endsection
@section('body')
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nome</td><td>E-mail</td><td>CPF</td><td>Nasc.</td><td>CEP</td><td>Sexo</td><td>Ações</td>
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
                    <td>
                        <a class="btn btn-primary" href="clientes/edit/{{$cliente->id}}"><span class="fa fa-pencil"></span></button>
                            <a class="btn btn-danger" href="clientes/del/{{$cliente->id}}"><span class="fa fa-trash"></span></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  {{ $clientes->links(null, ["Next"=>"proximo"]) }}
</div>
@endsection
