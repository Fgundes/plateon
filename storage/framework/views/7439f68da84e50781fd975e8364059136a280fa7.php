<?php $__env->startSection('bgcolor'); ?>
<body style="background: #b7dbf1">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    <br>
    <br>
<center><img class="img-responsive" src="img/peston.png" width="450px" height="190px"></center>
<br>
<br>
<center><h1> Cadastro do Aluno </h1></center>		
<br>			
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <label for="campo1">Nome</label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1">RM/RA</label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1">E-mail</label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1">Confirme seu E-mail</label>
            <input type="text" class="form-control" id="campo1">
            <br>

        </div>
    </div>
</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">

            <label for="campo1">Senha</label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1">Confirme sua Senha</label>
            <input type="text" class="form-control" id="campo1">
            <br>
            <label for="campo1">Selecione o ensino da instituição</label>
            <select class="form-control">						
                <option>Particular</option>							
                <option>Pública</option>							
                <option>Técnica</option>					
            </select></label>							
            <br>			
            <label for="campo1">Selecione o ano</label>						
            <select class="form-control">							
                <option>1º ano</option>							
                <option>2° ano</option>
                <option>3° ano</option>							
            </select></label>   <br>				
            <label for="campo1">Selecione a turma</label>										
            <select class="form-control">
                <option>Informática para Internet</option>							
                <option>Administração</option>							
                <option>Meio Ambiente</option>
                <option>Mecânica</option>							
                <option>Mecatrônica</option>							
            </select></label>
            <br>			</div>		
    </div>	
</div>					
</div>		
<div class="container-fluid">		
    <div class="row">			
        <div class="col-md-4">			
        </div>			
        <div class="col-md-2">
            <img class="img-circle" src="img/ipad.png" width="200px" height="200px">
        </div>
        <div class="col-md-2">
            <label for="exampleInputFile"><h3>Escolha uma imagem para seu perfil</h3></label>
            <input type="file" id="exampleInputFile">
        </div>
    </div>
</div>
<div class="col-md-4">
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
            <a href="/"><button type="button" class="btn btn-danger btn-lg btn-block">Cadastrar</button></a>
            <br>
            <a href="/cadastro"><button type="button" class="btn btn-primary btn-lg btn-block">Cancelar</button></a>
            <br>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</div>
<a  name="contact"></a>
<?php $__env->startSection('contato'); ?>

<?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_d', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>