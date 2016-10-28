<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/pb.jpg" width="1700px" height="380px" alt="" class="img-responsive">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/pb2.jpg" width="1700px" height="380px" alt="" class="img-responsive">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">O que é o <img class="img-responsive" src="img/pes2.png" width="90px"
                                                               height="40px"> ? </h2>
                    <p class="lead">O projeto consiste em melhorar o processo de aplicação de atividades online dentro
                        de uma escola, visando a melhora na interação entre alunos e professores no processo de
                        aprendizado estimulando o raciocínio lógico do aluno e consequentemente, melhorando suas
                        notas.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/est.png" alt="">
                </div>
            </div>
            <br>
            <br>
            <hr>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <h1>
                            <center>Em breve no site teremos :</center>
                        </h1>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                        <center>
                            <h2>Exercícios Online</h2>
                            <br>
                            <img src="img/exer.png" width="300px" height="200px" class="img-responsive" id="sombra">
                        </center>
                    </div>
                    <div class="col-md-5">
                        <center>
                            <h2>Contato entre professor e aluno</h2>
                            <img src="img/bat.png" width="300px" height="200px" class="img-responsive" id="sombra">
                        </center>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <center><h1>Vamos começar?</h1></center>
                        <a href="/register" type="button"
                           class="btn btn-primary btn-lg btn-block">CADASTRAR</button></a>
                        <hr>
                        <center><h2>OU</h2></center>
                        <hr>
                        <a href="/login" type="button" class="btn btn-primary btn-lg btn-block">LOGIN</button></a>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
<?php $__env->startSection('contato'); ?>

    <?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('v_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>