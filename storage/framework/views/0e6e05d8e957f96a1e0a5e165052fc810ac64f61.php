;

<?php $__env->startSection('contenido'); ?>

<h1>Calificaciones</h1>

<table class="table table-light table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID Examen</th>
        <th scope="col">Matrícula</th>
        <th scope="col">Nombre</th>
        <th scope="col">Literatura</th>
        <th scope="col">Matemáticas</th>
        <th scope="col">Ciencias</th>
        <th scope="col">Promedio Final</th>
    </tr>
</thead>
<tbody>
    <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res_alu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($res_alu->id); ?></td>
        <td><?php echo e($res_alu->control); ?></td>
        <td><?php echo e($res_alu->nombre); ?></td>
        <td><?php echo e($res_alu->literatura); ?></td>
        <td><?php echo e($res_alu->mates); ?></td>
        <td><?php echo e($res_alu->ciencias); ?></td>
        <td><?php echo e($res_alu->pfinal); ?></td>
        <td>
            <form action="<?php echo e(route ('resumen.destroy',$res_alu->id)); ?>" method="POST">
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
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_examen\resources\views/alumno/calificaciones/index.blade.php ENDPATH**/ ?>