<?php $__env->startSection('p_content'); ?>
<br>
<br>
<div class="container-fluid">
    <div class="col-md-12" style="background-color:#FFF"> <center><h1> Contatos</h1><hr></center>	
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
                <label for="campo1">Selecione o ensino da instituição</label>

                <select class="form-control">
                    <option></option>
                    <option>Ensino Médio</option>
                    <option>Tecnico</option>
                </select></label>

                <br>
                <label for="campo1">Sua Discplina</label>

                <select class="form-control">
                    <option></option>
                    <option>Artes</option>
                    <option>Biologia</option>
                    <option>Espanhol</option>
                    <option>Educação Física</option>
                    <option>Física</option>
                    <option>Filosofia</option>
                    <option>Geografia</option>
                    <option>História</option>
                    <option>Matemática</option>
                    <option>Portugês</option>
                    <option>Química</option>
                    <option>Sociologia</option>
                    <option>Administração</option>
                    <option>Informática</option>
                    <option>Meio Ambiente</option>
                    <option>Mecânica</option>
                    <option>Mecatrônica</option>
                </select></label>
                <br>
            </div>
            <div class="col-md-5">
                <label for="comment">Deixe sua Mensagem</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
                <br>
                <br>
                <img class="img-responsive" src="img/manu.png" width="600px" height="130px">
            </div>
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

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('p_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>