<?php $__env->startSection('bgcolor'); ?>
<body>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    <br>
    <br>
    <br>
<center><h1> Contatos</h1></center>		
<br>			
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-5">
            <label for="campo1">Nome</label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1">E-mail</label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1">Telefone</label>
            <input type="text" class="form-control" id="campo1">
            <br>
        </div>
        <div class="col-md-5">
            <label for="comment">Deixe sua Mensagem</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
            <br>
            <br>
            <img class="img-responsive" src="img/manu2.png" width="600px" height="130px">
        </div>
    </div>
</div>
<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <br>
            <button type="button" class="btn btn-danger btn-lg btn-block">Enviar</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Apagar</button>
            <br>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>							
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_d', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>