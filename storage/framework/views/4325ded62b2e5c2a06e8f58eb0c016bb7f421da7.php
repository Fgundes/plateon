<?php $__env->startSection('p_content'); ?>

<a name="about"></a>
<div class="intro-header">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <img class="img-reponsive" src="img/profile.png" width="170px" height="170px" alt>
                    <h1>Bem vindo</h1>
                    <h3><?php echo e(auth()->user()->name); ?></h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            <a href="/p_edit" class="btn btn-default btn-lg"><img src="img/edit.png" height="20px" width="20px"></i> <span class="network-name">Editar Perfil</span></a>
                        </li>    
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.intro-header -->

<!-- Page Content -->

<a  name="services"></a>
<div class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">"Professor, eu não consegui<br>entender a materia !"</h2>
                <p class="lead">Sempre aparece aquela duvida do aluno durante a explicação né?<br>aqui você poderá colocar resumos da sua disciplina e indicar video-aulas para seus alunos !</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/ipad.png" alt="">
            </div>
            <ul class="list-inline intro-social-buttons">
                <br><br>
                <li>
                    <a href="/p_resumos" class="btn btn-danger"><span class="network-name">Acessar</span></a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-a -->

<div class="content-section-b">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading"><font color="white">Quer deixar alguns exercicios<br> de fixação da sua disciplina?</h2>
                <p class="lead">Refazer alguns ou todos os exercicios ajuda bastante na hora de estudar e fixa o conteudo dado, vamos dar uma mãozinha para os seus alunos?</font></p>
                <p> 
                    <br><br>
                <li>
                    <a class="btn btn-danger"><span class="network-name">Acessar</span></a>
                </li>
                </p>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                <img class="img-responsive" src="img/dog.png" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-b -->

<div class="content-section-a">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Quer Falar com Alguem?<br>Fale com seu aluno!</h2>
                <p class="lead">As vezes na correria, você esquece avisar sobre como resolver algum exercico ou de pedir algum metarial diferenciado para a aula, fale com seu aluno(a) ou sua classe por aqui !</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/phones.png" alt="">
            </div>
            <br><br>
            <li>
                <a href="/p_contato" class="btn btn-danger"><span class="network-name">Acessar</span></a>
            </li>
        </div>

    </div>
    <!-- /.container -->

</div>

<?php $__env->startSection('contato'); ?>

<?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('p_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>