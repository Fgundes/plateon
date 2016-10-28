<?php $__env->startSection('content'); ?>

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
            <table class="table table-striped">
                <tr>
                    <td><b><center>Materia</center></b></td>
                    <td><b><center>Professor</center></b></td>
                    <td><b><center>Serie</center></b></td>
                    <td><b><center>Download</center></b></td>
                    <td><b><center>Excluir</center></b></td>
                </tr>
                <?php foreach($resumos as $resumo): ?>
                <tr>
                    <td><center><?php echo e($resumo -> assunto); ?></center></td>
                <td><center><?php echo e($resumo -> texto); ?></center></td>
                <td><center><?php echo e($resumo -> arquivo); ?></center></td>
                <td><center><img src="<?php echo e(url('img/down.png')); ?>" width="30px" height="30px"></center></td>
                <td><center><a href='/excluir_resumo'><button class="glyphicon glyphicon-remove-circle"></button></a></center></td>
                </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>
<?php $__env->startSection('contato'); ?>

<?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('v_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>