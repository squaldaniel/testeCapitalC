@extends('bootstrap.model')
@section('head')
    @include('bootstrap.online.onheader')
@endsection
@section('body')
    <div class="container-fluid">
        <!-- container -->
        <form class="row g-3" method="POST" action="" style="margin: 15px">
            <div class="col-md-6">
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-2">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
              </div>
              <div class="col-md-2">
                <label for="nascimento" class="form-label">Nascimento:</label>
                <input type="date" class="form-control" id="nascimento" name="nascimento" required>
              </div>
              <div class="col-md-2">
                <label for="cep" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep">

              </div>
                <div class="col-md-1">
                    <br>
                    <button class="btn btn-success" style="margin:5px"> Buscar</button>
                </div>
              <div class="col-md-3">
                <label for="inputPassword4" class="form-label">Sexo:</label>
                <div>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Masculino:
                    </label>
                <input class="form-check-input" type="radio" name="sexo" value="M">
                <label class="form-check-label" for="flexRadioDefault1">
                    Feminino:
                </label>
                <input class="form-check-input" type="radio" name="sexo" value="F">
                </div>
              </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Rua:</label>
              <input type="text" class="form-control" id="rua" name="rua">
            </div>
            <div class="col-1">
              <label for="inputAddress2" class="form-label">Numero:</label>
              <input type="text" class="form-control" id="inputAddress2" >
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
        <!-- container -->
    </div>
@endsection
@section("footer")
    @include('bootstrap.footer')
@endsection
