




<div class="card-title">

<h2 class="text-center sombra white sombraTexto redondo p-2">Productos</h2>
</div>

<div class="card-body alert alert-light">
<form id="productoCrear" class="form-group" action="<?php echo e(url('/producto')); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<label for="nombreP">Nombre:</label>
<br>
<input class="form-control"type="text" name="nombreP" id="nombreP" placeholder="ingresa el nombre del producto">
<br>
<label for="nombreP">Categoria:</label>
<br>
<select name="categorias" id="categorias"class="form-select" aria-label="Default select example" required>

 <option value="default">Seleccione una categoria</option>
  <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<br>
<label for="desP">Descripcion:</label>
<br>
<input class="form-control"type="text" name="desP" id="desP" placeholder="agrega una descripcion">
<br>
<label for="precioP">Precio:</label>
<br>
<input class="form-control"type="text" name="precioP" id="precioP" placeholder="elige el precio de tu producto">
<br>
<label for="img" class="form-label">Selecciona la imagen</label>
<input class="form-control"type="file" name="imgx" id="imgx">
<hr>
<button id="crearP"class="btn btn-outline-dark"type="submit">Agregar producto</i></button>
</form>

</div>







<?php /**PATH C:\wamp64\www\mercado\resources\views///producto/create.blade.php ENDPATH**/ ?>