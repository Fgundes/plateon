@extends ('u_template')

@section('u_content')
<br>
<br>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-12" style="background-color:#FFF">
        <br> <h2>Selecione a disciplina para estudar </h2>
        <hr>
        <br>
        @foreach($disciplinas as $disciplina)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div>
                    <a href="/u_resumos/{{$disciplina->nome}}">
                        <img class="img-responsive" src="{{url('img/materias/'.$disciplina->foto)}}" style="border-radius: 4px;" id="sombra" alt="">
                    </a>
                </div>
            </div>
        </div>
        @endforeach                      
        <hr>
        <br>
    </div>
</div>
@section('contato')

@include('partials.contato')

@endsection

@endsection