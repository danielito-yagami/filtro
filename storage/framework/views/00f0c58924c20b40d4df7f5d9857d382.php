

<div class="card-title redondo">

<h2 class="text-center sombra white sombraTexto redondo p-2">Categorias</h2>
</div>

<div class="card-body alert alert-light">
<form class="form-group"action="<?php echo e(url('/categorias')); ?>" method="post">
    <!---Enviar informacion solo de este formulario-->
<?php echo csrf_field(); ?>
<label for="nombreC">Nombre:</label>
<br>
<input class="form-control"type="text" name="nombreC" id="nombreC" placeholder="ingresa el nombre de la categoria" REQUIRED>

<hr>
<button class="btn btn-outline-dark"type="submit">Agregar categoria</i></button>
</form>

</div>




<?php /**PATH C:\wamp64\www\mercado\resources\views///categorias/create.blade.php ENDPATH**/ ?>