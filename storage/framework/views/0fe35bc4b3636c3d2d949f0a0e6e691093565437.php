<?php $__env->startSection('u_content'); ?>
<br>
<br>
<br>
<center>
    <img class="img-responsive" src="<?php echo e(url('img/materias/'. $disciplina->nome .'.png')); ?>" width="900px" height="400px" style="border-radius: 4px;">
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
                                <a href="/u_disciplinas"> <span class="badge pull-right"></span>Voltar às Disciplinas</a>
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
                    <?php foreach($resumos as $resumo): ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    <?php echo e($resumo -> assunto); ?>

                                </h3>
                                <h6> Professor, Serie e Turma</h6>
                                <hr>
                                <h5>
                                    Aqui vai uma breve descrição da materia em que o professor deseja postar para o aluno realizar seu estudo de forma pratica.
                                    </p></h5>
                                <button type="submit" class="btn btn-primary btn-lg" value="Salvar"><span class="glyphicon glyphicon-floppy-disk"></span></button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="/u_disciplinas"> <span class="badge pull-right"></span>Voltar às Disciplinas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->startSection('contato'); ?>

<?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('u_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>