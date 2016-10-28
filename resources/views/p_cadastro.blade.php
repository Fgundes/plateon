@extends ('v_template')

@section('content')
<br>
<br>
<center><img class="img-responsive" src="img/pes.png" width="450px" height="190px"></center>
<br>
<br>
<center><h1><font color="white">Cadastro do Professor </h1></center>
<br>
<form enctype="multipart/form-data" action="{{route('saveProf')}}" method="POST">
    {{ csrf_field() }}			
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">

                <label for="Nome"><h4>Nome Completo</h4></label>
                <input type="text" id="nome" class="form-control" name="nome">
                <br>
                <label for="Email"><h4>E-mail</h4></label>
                <input type="email" id="email" class="form-control" name="email">
                <br>
                <label for="Senha"><h4>Senha</h4></label>
                <input type="password" id="senha" class="form-control" name="senha">
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container-fluid">		
        <div class="row">			
            <div class="col-md-3">		
            </div>		
            <div class="col-md-6">
                <br>
                <button class="btn btn-danger btn-lg btn-block">Cadastrar</button>
                <br>
                <br>
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div>
</form>

@section('contato')

@include('partials.contato')

@endsection

@endsection