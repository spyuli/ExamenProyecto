;

<?php $__env->startSection('contenido'); ?>

<h2>Examen de Ciencias</h2>

<script>
    const respuesta = [];
    const id = [];
    var score = 0;
    var score2 = 0;
    var cal   = 0;
    var num   = 0;
</script>

<form action="alumno/ciencias" class="form-horizontal" method="POST">
    <?php echo csrf_field(); ?>

    
    <?php $__currentLoopData = $tema2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php ($n=1); ?>
    <div class="mb-3" id="v<?php echo e($tema->id); ?>">
    <label><?php echo e($tema->pregunta); ?></label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="r<?php echo e($tema->id); ?>" id="A<?php echo e($tema->id); ?>" value="A" required="required">
    <label class="form-check-label" for="exampleRadios1">
    A) <?php echo e($tema->opcion_a); ?>

    </label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="r<?php echo e($tema->id); ?>" id="B<?php echo e($tema->id); ?>" value="B">
    <label class="form-check-label" for="exampleRadios2">
    B) <?php echo e($tema->opcion_b); ?>

    </label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="r<?php echo e($tema->id); ?>" id="C<?php echo e($tema->id); ?>" value="C" >
    <label class="form-check-label" for="exampleRadios3">
    C) <?php echo e($tema->opcion_c); ?>

    </label>
    </div>
    </div>

    <script>
        respuesta.push("<?php echo e($tema->respuesta); ?>")
        id.push("<?php echo e($tema->id); ?>")
        n ++;
    </script>

    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <a href="resumen/create" class="btn btn-success" tabindex="6" onclick="calificar();" >Guardar</a>
    <a class="btn btn-success" tabindex="7" onclick="mostrar();" >Ver Resultados</a>

    <script>

        function mostrar(){
           var res1 = $("input:radio[name='r1']:checked").val();
           var res2 = $("input:radio[name='r2']:checked").val();
           var res3 = $("input:radio[name='r3']:checked").val();
           var res4 = $("input:radio[name='r4']:checked").val();
           var res5 = $("input:radio[name='r5']:checked").val();
           document.getElementById("pfinal");
           
           if (respuesta[0] == res1){
               score2 = score2 + 1 ;
               document.getElementById("v1").style.backgroundColor = "green"

           }else{
            document.getElementById("v1").style.backgroundColor = "red"
            //document.getElementById("'" + res1 + respuesta[0] + "'").style.color = "blue"
            document.getElementById("'" +  respuesta[0] + "1'").style.color = "blue"


           }
           
           if (respuesta[1] == res2){
               score2 = score2 + 1 ;
               document.getElementById("v2").style.backgroundColor = "green"
           }else{
            document.getElementById("v2").style.backgroundColor = "red"
            document.getElementById("'" +  respuesta[0] + "2'").style.color = "blue"
           }
           
           if (respuesta[2] == res3){
               score2 = score2 + 1 ;
               document.getElementById("v3").style.backgroundColor = "green"
           }else{
            document.getElementById("v3").style.backgroundColor = "red"
            document.getElementById("'" +  respuesta[0] + "3'").style.color = "blue"
           }
           
           
           if (respuesta[3] == res4){
               score2 = score2 + 1 ;
               document.getElementById("v4").style.backgroundColor = "green"
           }else{
            document.getElementById("v4").style.backgroundColor = "red"
            document.getElementById("'" +  respuesta[0] + "4'").style.color = "blue"
           }
           
           if (respuesta[4] == res5){
               score2 = score2 + 1 ;
               document.getElementById("v5").style.backgroundColor = "green"
           }else{
            document.getElementById("v5").style.backgroundColor = "red"
            document.getElementById("'" +  respuesta[0] + "4'").style.color = "blue"
           }

           

           return alert("Tienes "+score2 +" aciertos correctos");
           
           score2 = 0;

        }
    </script>
    

    <script>

        function calificar(){
           
           var res1 = $("input:radio[name='r1']:checked").val();
           var res2 = $("input:radio[name='r2']:checked").val();
           var res3 = $("input:radio[name='r3']:checked").val();
           var res4 = $("input:radio[name='r4']:checked").val();
           var res5 = $("input:radio[name='r5']:checked").val();
           
           if (respuesta[0] == res1){
               score = score + 1 ;
           }if (respuesta[1] == res2){
               score = score + 1 ;
           }if (respuesta[2] == res3){
               score = score + 1 ;
           }if (respuesta[3] == res4){
               score = score + 1 ;
           }if (respuesta[4] == res5){
               score = score + 1 ;
           }

           cal = score*(100/id.length);
           //alert("La calificaci??n es:"+ cal);
           window.onload = localStorage.setItem("cal3",cal);
           score = 0;
        }

    </script>

</form>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_examen\resources\views/alumno/ciencias/index.blade.php ENDPATH**/ ?>