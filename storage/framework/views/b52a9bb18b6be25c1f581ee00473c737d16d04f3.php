<?php $__env->startSection('content'); ?>
<br>
<br>
<center><img class="img-responsive" src="img/pes.png" width="450px" height="190px"></center>
<br>
<br>
<center><h1><font color="white">Cadastro do Professor </h1></center>
<br>
<form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
    <?php echo e(csrf_field()); ?>


    <div class="col-md-10<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
        <label for="name" class="col-md-4 control-label">Nome</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

            <?php if($errors->has('name')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('name')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <br>
    <div class="col-md-10<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <label for="email" class="col-md-4 control-label">Endereço de E-Mail</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

            <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <br>
    <div class="col-md-10<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <label for="password" class="col-md-4 control-label">Senha</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password">

            <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <br>
    <div class="col-md-10<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
        <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

            <?php if($errors->has('password_confirmation')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>

    <br>
    <br>
    <div class="col-md-10">
        <label for="tipo" class="col-md-4 control-label">Tipo</label>

        <div class="col-md-6">
            <select name="tipo">
                <option value="0">Aluno</option>
                <option value="1">Professor</option>
            </select>
            <input type="text" name="cod_prof" placeholder="Código do professor" class="form-control">
        </div>
        <?php if($errors->has('cod_prof')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('cod_prof')); ?></strong>
            </span>
            <?php endif; ?>
        
    </div>
</div>
<br>
<br>
<div class="col-md-10">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"></i> Cadastrar
        </button>
    </div>
</div>
</form>
<br>
<br>
<br>
<?php $__env->startSection('contato'); ?>

<?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('v_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>