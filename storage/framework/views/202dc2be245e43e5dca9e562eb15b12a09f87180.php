<?php $__env->startSection('p_content'); ?>
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
                    <option>Tecnico</option>
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
                <label for="campo1">Selecione a Sua disciplina</label>
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
                    <p class="help-block">Exemplo de texto de ajuda em nível de bloco.</p>
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
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
    </div>
</div>

<hr>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('p_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>