<?php $__env->startSection('p_content'); ?>
<!-- Header -->
<a name="about"></a>
<div class="intro-header">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <center><div class="intro-message">
                        <img class="img-reponsive" src="img/profile.png" alt>
                        <h3>"nome do prof"</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a class="btn btn-default btn-lg"><img src="img/edit.png" height="20px" width="20px"></i> <span class="network-name">Editar Perfil</span></a>
                            </li>    
                        </ul>
                    </div></center>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<img src="img/aviso.png"class="img-responsive">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('p_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>