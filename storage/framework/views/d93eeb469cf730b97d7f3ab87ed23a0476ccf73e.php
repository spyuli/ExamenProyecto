;

<?php $__env->startSection('contenido'); ?>;

<h2>Crear Pregunta</h2>

<form action="/ciencias" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="" class="form-label">Pregunta</label>
        <input id ="pregunta" name="pregunta" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Opción A</label>
        <input id ="opcion_a" name="opcion_a" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Opción B</label>
        <input id ="opcion_b" name="opcion_b" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Opción C</label>
        <input id ="opcion_c" name="opcion_c" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <select name="respuesta"  id="respuesta" class="form-select" tabindex="5" required>
            <option value="" disabled selected>Respuesta</option>
            <option value="A">Opción A</option>
            <option value="B">Opción B</option>
            <option value="C">Opción C</option>
        </select>
    </div>
    <a href="/ciencias" class="btn btn-primary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-secondary" tabindex="6">Guardar</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_examen\resources\views/ciencias/create.blade.php ENDPATH**/ ?>