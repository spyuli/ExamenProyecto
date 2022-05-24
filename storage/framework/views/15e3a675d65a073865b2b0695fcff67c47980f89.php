;

<?php $__env->startSection('contenido'); ?>

<h1>Preguntas Ciencias</h1>
<a href="ciencias/create" class="btn btn-primary">Crear</a>

<table class="table table-light table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Pregunta</th>
        <th scope="col">Opción A</th>
        <th scope="col">Opción B</th>
        <th scope="col">Opción C</th>
        <th scope="col">Respuesta</th>
    </tr>
</thead>
<tbody>
    <?php $__currentLoopData = $tema2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($tema->id); ?></td>
        <td><?php echo e($tema->pregunta); ?></td>
        <td><?php echo e($tema->opcion_a); ?></td>
        <td><?php echo e($tema->opcion_b); ?></td>
        <td><?php echo e($tema->opcion_c); ?></td>
        <td><?php echo e($tema->respuesta); ?></td>
        <td>
            <form action="<?php echo e(route ('ciencias.destroy',$tema->id)); ?>" method="POST">
            <a href="/ciencias/<?php echo e($tema->id); ?>/edit" class="btn btn-info">Editar</a>
            <?php echo csrf_field(); ?> 
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_examen\resources\views/ciencias/index.blade.php ENDPATH**/ ?>