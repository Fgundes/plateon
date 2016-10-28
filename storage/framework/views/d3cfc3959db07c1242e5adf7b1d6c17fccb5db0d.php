<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <center><img class="img-responsive" src="img/pes.png" width="460px" height="200px"></center>
    <br>
    <br>
    <center><h1><font color="white">Login do Professor</h1></center>
    <br>
    <div class="container-fluid">
        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="col-md-10<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

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
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password">

                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i> Login
                    </button>
                    <a class="btn btn-danger" href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password?</a>
                </div>
            </div>
        </form>
    </div>
<?php $__env->startSection('contato'); ?>

    <?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('v_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>