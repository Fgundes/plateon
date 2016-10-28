<?php $__env->startSection('content'); ?>
<br>
<br>
<center><img class="img-responsive" src="img/pes.png" width="460px" height="200px"></center>
<br>
<br>
<br>
<br>
<center><h1><font color="white">Login do Professor </h1></center>		
<br>			
<div class="container-fluid">
    <form enctype="multipart/form-data" action="<?php echo e(route('loginProf')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <label for="email">Email</label>
                <input type="text" id="email" class="form-control" name="email">
                <br>
                <label for="senha">Senha</label>
                <input type="password" id="senha" class="form-control" name="senha">
                <br>
                <br>
                <button class="btn btn-danger btn-lg btn-block">Login</button>		
                <br>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('v_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>