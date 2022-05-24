;

<?php $__env->startSection('contenido'); ?>;

<h2>Examen de Ciencias</h2>

<form action="/ciencias" method="POST">
    <?php echo csrf_field(); ?>

    <?php $__currentLoopData = $tema2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="mb-3">
    <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="a" checked>
    <label class="form-check-label" for="exampleRadios1">
    <?php echo e($tema->opcion_a); ?>

    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="b">
    <label class="form-check-label" for="exampleRadios2">
    <?php echo e($tema->opcion_b); ?>

    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="c" disabled>
    <label class="form-check-label" for="exampleRadios3">
    <?php echo e($tema->opcion_c); ?>

    </label>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <a href="/ciencias" class="btn btn-primary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-secondary" tabindex="6">Guardar</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_examen\resources\views/alumno/index_ciencias.blade.php ENDPATH**/ ?>