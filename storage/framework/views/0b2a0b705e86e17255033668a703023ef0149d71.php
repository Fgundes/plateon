<?php $__env->startSection('u_content'); ?>
<a name="about"></a>
<div class="intro-header">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <img class="img-reponsive" src="img/profile.png" width="170px" height="170px" alt>
                    <h1>Bem vindo</h1>
                    <h3>"nome aluno", "serie e turma"</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            <a href="/u_edit" class="btn btn-default btn-lg"><img src="img/edit.png" height="20px" width="20px"></i> <span class="network-name">Editar Perfil</span></a>
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
                <h2 class="section-heading">Duvida em alguma <br>materia ?</h2>
                <p class="lead">Sempre aparece aquela duvida depois de alguma aula, né?<br>Aqui você terá alem dos resumos, algumas sugestões de video aulas de seu professor !</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/ipad.png" alt="">
            </div>
            <ul class="list-inline intro-social-buttons">
                <br><br> 
                <li>
                    <a href="resumos-u.html" class="btn btn-danger"><span class="network-name">Acessar</span></a>
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
                <h2 class="section-heading"><font color="white">Quer fixar mais a matéria<br> que aprendeu?</h2>
                <p class="lead"><h4>Refazer alguns ou todos os exercicios ajuda bastante na hora de estudar para descolar aquele MB redondo no final do bimestre, vamos começar?</h4></font></p>
                <p> 
                    <br>
                    <br>
                <li>
                    <a href="exer-u.html"class="btn btn-danger"><span class="network-name">Acessar</span></a>
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
                <h2 class="section-heading">Ainda está com duvida?<br>Fale com seu professor !</h2>
                <p class="lead">Sempre surge uma duvida na hora de resolver algum exercício, ou até mesmo na hora de compreender a materia, fale com seu professor por aqui mesmo !</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/phones.png" alt="">
            </div>
            <br>
            <br>
            <li>
                <a href="contato-u.html" class="btn btn-danger"><span class="network-name">Acessar</span></a>
            </li>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-a -->
<?php $__env->startSection('contato'); ?>

<?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('u_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>