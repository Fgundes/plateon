@extends ('v_template')

@section ('content')
<br>
<br>
<br>
<center><img class="img-responsive" src="img/pes.png" width="450px" height="190px"></center>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <h1><center><font color="white">Você é aluno ou professor?</font></center></h1>
            <center> 
                <a href="/u_cadastro"><button type="button" class="btn btn-primary btn-lg btn-block"> ALUNO </button></a>
                <br>
                <a href="/p_cadastro"><button type="button" class="btn btn-primary btn-lg btn-block"> PROFESSOR </button></a>
                <br>
                <br>
            </center>
        </div>
    </div>
</div>

@endsection