;

<?php $__env->startSection('contenido'); ?>;

<h2>Crear Pregunta</h2>

<form action="/matematicas/<?php echo e($tema->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
        <label for="" class="form-label">Pregunta</label>
        <input id ="pregunta" name="pregunta" type="text" class="form-control" value="<?php echo e($tema->pregunta); ?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Opción A</label>
        <input id ="opcion_a" name="opcion_a" type="text" class="form-control" value="<?php echo e($tema->opcion_a); ?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Opción B</label>
        <input id ="opcion_b" name="opcion_b" type="text" class="form-control" value="<?php echo e($tema->opcion_b); ?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Opción C</label>
        <input id ="opcion_c" name="opcion_c" type="text" class="form-control" value="<?php echo e($tema->opcion_c); ?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Respuesta</label>
        <input id ="respuesta" name="respuesta" type="text" class="form-control" value="<?php echo e($tema->respuesta); ?>">
    </div>
    <a href="/matematicas" class="btn btn-primary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-secondary" tabindex="6">Guardar</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_examen\resources\views/matematicas/edit.blade.php ENDPATH**/ ?>