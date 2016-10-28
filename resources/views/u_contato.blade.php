@extends ('u_template')

@section('u_content')
<br>
<br>
<div class="container-fluid">
    <div class="col-md-12" style="background-color:#FFF"> <center><h1> Contatos</h1><hr></center>	
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-5">							
                <label for="campo1">Nome</label>
                <input type="text" class="form-control" id="campo1">
                <br>

                <label for="campo1">E-mail</label>
                <input type="text" class="form-control" id="campo1">
                <br>

                <label for="campo1">Selecione a serie</label>
                <select class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <br>

                <label for="campo1">Selecione o ensino</label>
                <select class="form-control">
                    <option></option>
                    <option>Ensino Medio</option>
                    <option>Integrado</option>
                    <option> Tecnico</option>
                </select>

                <br>
                <label for="campo1">Sua turma</label>

                <select class="form-control">
                    <option></option>
                    <option>EMA</option>
                    <option>EMB</option>
                    <option>EMAD</option>
                    <option>EMIA</option>
                    <option>EMMEC</option>
                    <option>EMMECA</option>
                    <option>EMMEIO</option>
                </select>
                <br>
            </div>
            <div class="col-md-5">
                <label for="comment">Deixe sua Mensagem</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
                <br>
                <br>
                <img class="img-responsive" src="img/manu.png" width="600px" height="130px">
                <div class="col-md-6">
                    <br>
                    <button type="button" class="btn btn-danger btn-lg btn-block">Enviar</button>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Apagar</button>
                    <br>
                </div>
            </div>
        </div>
    </div>    
</div>
@section('contato')

@include('partials.contato')

@endsection

@endsection