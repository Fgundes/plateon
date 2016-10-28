<?php $__env->startSection('p_content'); ?>
<br>
<br>
<br>
<div class="container">


    <div class="my-panel" style="padding: 20px;">
        <form enctype="multipart/form-data" action="/save" method="POST">
            <?php echo e(csrf_field()); ?>


            <div class="form-group">
                <label for="disciplina_id">Disciplina</label>
                <select class="form-control" name="disciplina_id">
                    <?php foreach($disciplinas as $disciplina): ?>
                    <option value="<?php echo e($disciplina->id); ?>"><?php echo e($disciplina->nome); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="assunto">Assunto</label>
                <input type="text" id="assunto" class="form-control" name="assunto" placeholder="Qual é a matéria a ser tratada?">
            </div>
            <div class="form-group">
                <label for="texto">Texto</label>
                <input type="text" id="texto" class="form-control" name="texto" placeholder="Um breve resumo sobre o que se trata o arquivo.">
            </div>

            <div class="form-group">
                <label for="arquivo">Arquivo</label>
                <input type="file" id="arquivo" class="form-control" name="arquivo">
            </div>

            <button class="btn btn-default">Cadastrar</button>
        </form>
    </div>

</div>
<?php $__env->startSection('contato'); ?>
<br>

<div>
<?php echo $__env->make('partials.contato', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('p_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>