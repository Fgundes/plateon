<?php $__env->startSection('p_content'); ?>
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
        <br> <h2>Selecione a disciplina para gerenciar </h2>
        <hr>
        <br>
        <?php foreach($disciplinas as $disciplina): ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div>
                    <a href="/p_resumos/<?php echo e($disciplina->nome); ?>">
                        <img class="img-responsive" src="<?php echo e(url('img/materias/'.$disciplina->foto)); ?>" style="border-radius: 4px;" id="sombra" alt="">
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>                      
        <hr>
        <br>
    </div>
</div>
<?php $__env->startSection('contato'); ?>

<?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('p_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>