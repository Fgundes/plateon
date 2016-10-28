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
                    <img class="img-responsive" src="img/b.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3> Biologia</h3>
                <h4></h4>
                <p></p>
                <a class="btn btn-primary" href="#"> <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="img/q.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Quimica</h3>
                <h4></h4>
                <p></p>
                <a class="btn btn-primary" href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <h1><center> Está faltando alguma disciplina? Entre em contato conosco. </h1></big>
    <center><h2><a href="/contato_v" class="btn btn-default btn-lg"><img src="img/cont.png" height="50px" width="50px"></i> <span class="network-name">CONTATOS</span></a> </h2></li></center>

    <hr>

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="/resumos_v">&laquo;</a>
                </li>
                <li>
                    <a href="/resumos_v">1</a>
                </li>
                <li class="active">
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

    <hr>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('template_d', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>