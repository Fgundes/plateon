<?php $__env->startSection('u_content'); ?>
<br>
<br>
<div class="container">
    <div class="col-md-12" style="background-color:#FFF">		
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <center><h1> Editar Perfil </h1></center>
                <label for="campo1">Nome</label>
                <input type="text" class="form-control" id="campo1">
                <br>
                <label for="campo1">Novo E-mail</label>
                <input type="text" class="form-control" id="campo1">
                <br>
                <label for="campo1">Nova Senha</label>
                <input type="text" class="form-control" id="campo1">
                <br>
                <label for="campo1">Selecione o Ensino</label>
                <select class="form-control">
                    <option></option>
                    <option>Ensino Medio</option>
                    <option>Integrado</option>
                </select></label>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>	
</div>
<div class="container">
    <div class="col-md-12" style="background-color:#FFF">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <br>
                <label for="campo1">Selecione a serie</label>
                <select class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select></label>
                <br>
                <label for="campo1">Selecione a turma</label>

                <select class="form-control">
                    <option></option>
                    <option>EMA</option>
                    <option>EMB</option>
                    <option>EMAD</option>
                    <option>EMAD - R.A.</option>
                    <option>EMIA</option>
                    <option>EMIB - R.A.</option>
                    <option>EMMEC</option>
                    <option>EMMECA</option>
                    <option>EMMEIO</option>
                </select></label>
                <br>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</div>	

<div class="container">
    <div class="col-md-12" style="background-color:#FFF">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="col-md-3">
                    <img class="img-circle" src="img/ipad.png" width="200px" height="200px">
                </div>
                <div class="col-md-4">
                    <label for="exampleInputFile"><h3>Imagem ultilizada no perfil</h3></label>
                    <input type="file" id="exampleInputFile">
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4">
                    <br>
                    <button type="button" class="btn btn-danger btn-lg btn-block">Salvar Alterações</button>
                    <br>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<hr>
<?php $__env->startSection('contato'); ?>

<?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('u_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>