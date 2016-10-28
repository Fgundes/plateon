<?php $__env->startSection('content'); ?>
<br>
<br>	
<br>	
<div class="container-fluid">
    <div class="col-md-12" style="background-color:#f2f2f2"> <center><h1> Contatos</h1><hr></center>	
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
                <img class="img-responsive" src="img/manu.png" width="600px" height="130px">
                <br>
            </div>
        </div>
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
    </div>
</div>
<br>
<br>							
<?php $__env->stopSection(); ?>
<?php echo $__env->make('v_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>