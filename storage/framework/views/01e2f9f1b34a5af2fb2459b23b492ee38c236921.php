<?php $__env->startSection('p_content'); ?>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro-message">
                        <img class="img-reponsive" src="img/profile.png" alt>
                        <h3><?php echo e(auth()->user()->name); ?></h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a class="btn btn-default btn-lg"><img src="img/edit.png" height="20px"
                                                                       width="20px"></i> <span class="network-name">Editar Perfil</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="img/aviso.png" class="img-responsive">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('p_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>