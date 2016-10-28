@extends ('v_template')

@section ('content')
<br>
<br>
<center><img class="img-responsive" src="img/pes.png" width="450px" height="190px"></center>
<br>
<br>
<center><h1><font color="white">Cadastro do Aluno </h1></center>		
<br>			
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <label for="campo1"><h4>Nome</h4></label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1"><h4>RM</h4></label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1"><h4>E-mail</h4></label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1"><h4>Confirme seu E-mail</h4></label>
            <input type="text" class="form-control" id="campo1">
            <br>

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">

            <label for="campo1"><h4>Senha</h4></label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1"><h4>Confirme sua Senha</h4></label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1"><h4>Selecione o ensino</h4></label>
            <select class="form-control">						
                <option></option>							
                <option>Ensino Médio</option>							
                <option>Integrado</option>
            </select>							
            <br>			
            <label for="campo1"><h4>Selecione a instituição</h4></label>						
            <select class="form-control">							
                <option></option>							
                <option>ETEC Pedro Ferreira Alves</option>
                <option>E.E. Dr. Oscar Rodrigues Alves</option>							
            </select>   <br>
            <label for="campo1"><h4>Selecione a série</h4></label>						
            <select class="form-control">
                <option></option>
                <option>1</option>							
                <option>2</option>
                <option>3</option>							
            </select><br>				
            <label for="campo1"><h4>Selecione a turma</h4></label>										
            <select class="form-control">
                <option></option>							
                <option>EMA</option>							
                <option>EMB</option>
                <option>EMAD</option>							
                <option>EMAD - R.A.</option>							
                <option>EMIA</option>				
                <option>EMIB - R.A.</option>							
                <option>EMMEIO</option>
                <option>EMMEC</option>							
                <option>EMMEC</option>							
            </select>
            <br>
        </div>		
    </div>	
</div>							
<div class="container-fluid">		
    <div class="row">			
        <div class="col-md-4">			
        </div>			
        <div class="col-md-2">
            <img class="img-circle" src="img/ipad.png" width="200px" height="200px">
        </div>
        <div class="col-md-2">
            <label for="exampleInputFile"><h3>Escolha uma imagem para seu perfil</h3></label>
            <input type="file" id="exampleInputFile">
            <p class="help-block"><font color="white">Exemplo de texto de ajuda em nível de bloco.</font></p>
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
            <button type="button" class="btn btn-danger btn-lg btn-block">Cadastrar</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Cancelar</button>
            <br>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</div>
<!-- /.banner -->
@section('contato')

@include('partials.contato')

@endsection
@endsection