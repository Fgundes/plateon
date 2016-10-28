@extends ('p_template')

@section('p_content')

<br>
<br>
<br>
<center>
    <img class="img-responsive" src="{{url('img/materias/'. $disciplina->nome .'.png')}}" width="900px" height="400px" style="border-radius: 4px;">
</center>	
<br>
<br>
<br>
<div class="row">
    <!-- /.row -->
    <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="/p_disciplinas"> <span class="badge pull-right"></span>Voltar às Disciplinas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Atenção!</strong> Sistema de busca não está funcionando, em breve estaremos resolvendo o problema.
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">BUSCAR</button>
                        </span>
                        <input type="text" class="form-control" placeholder="Professor">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Materia">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">BUSCAR</button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="col-lg-2">
                </div><!-- /.col-lg-6 -->
            </div>
            <br>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <br>
                    @foreach ($resumos as $resumo)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    {{$resumo -> assunto}}
                                </h3>
                                <h6> Professor, Serie e Turma</h6>
                                <hr>
                                <h5>
                                    Aqui vai uma breve descrição da materia em que o professor deseja postar para o aluno realizar seu estudo de forma pratica.
                                    </p></h5>
                                <button type="submit" class="btn btn-primary btn-lg" value="Salvar"><span class="glyphicon glyphicon-floppy-disk"></span></button>
                                <button type="submit" class="btn btn-primary btn-lg" value="Remover"><span class="glyphicon glyphicon-remove"></span></button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="/p_disciplinas"> <span class="badge pull-right"></span>Voltar às Disciplinas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<center><nav>
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</center> 

<br>
<br>
<a  name="services"></a>
<div class="content-section-a">
    <div class="container">
        <div class="row">
            <form enctype="multipart/form-data" action="{{route('save')}}" method="POST">
                {{ csrf_field() }}	
                <input type="hidden" name="disciplina_id" value="{{ $disciplina->id }}">
                <div class="form-group">
                    <label for="arquivo">Adicione um Resumo:</label>
                    <input type="file" name="arquivo" required>
                </div>
                <br>
                <h4>Assunto da Matéria</h4>
                <input type="text" id="assunto" name="assunto" class="form-control" placeholder="Assunto da materia">
                <br>
                <h4>Resumo</h4>
                <input type="textarea" id="texto" name="texto" class="form-control" placeholder="Coloque aqui um breve texto sobre o resumo para que sua indentificação fique mais fácil!">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">
                            <br>
                            <button class="btn btn-primary btn-lg btn-block">ENVIAR</button>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@section('contato')

@include('partials.contato')

@endsection

@endsection