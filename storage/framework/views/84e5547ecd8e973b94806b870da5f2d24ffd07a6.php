<?php $__env->startSection('bgcolor'); ?>
<body>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <br>
                    <br> <h1>Selecione a disciplina para estudar </h1>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <br>
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="img/m.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3> Matematica</h3>
                <h4>Acesse as materias dos professores Z, Y e X para estudar, vamos lá?</h4>
                <p></p>
                <a class="btn btn-danger" href="/mat_v">ACESSAR</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="img/p.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Português</h3>
                <h4></h4>
                <p></p>
                <a class="btn btn-primary" href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="img/h.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>História</h3>
                <h4></h4>
                <p></p>
                <a class="btn btn-primary" href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="img/g.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Geografia</h3>
                <h4></h4>
                <p></p>
                <a class="btn btn-primary" href="#"> <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="img/f.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Física</h3>
                <h4></h4>
                <p></p>
                <a class="btn btn-primary" href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="">1</a>
                    </li>
                    <li>
                        <a href="/resumos2_v">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    <li>
                        <a href="/resumos2_v">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
        <a name="contact"></a>
        <?php $__env->startSection('contato'); ?>

        <?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php $__env->stopSection(); ?>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('template_d', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>