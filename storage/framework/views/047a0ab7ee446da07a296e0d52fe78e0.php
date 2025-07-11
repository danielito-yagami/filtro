<!doctype html>
<html lang="en">
    <head>
        <title>Carrito de compras</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/styles.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome/css/all.css')); ?>">
    </head>

    <body id="fondo">
<!-----------------Parte del navbar--------------->

<nav
    id="barra"class="navbar navbar-expand-sm navbar-light bg-light"
>
    <div class="container">
    <img class="navbar-brand redondo" src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="Title" height="100px" width="100px"/>

        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link  boton-link" href="<?php echo e(asset('./')); ?>"><i class="fa-solid fa-list"></i> Lista de productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  boton-link" href="<?php echo e(asset('./edit')); ?>"><i class="fa-solid fa-file-import"></i> Agregar productos/categorias</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<br><br><br><br>
<br><br>

<!------------------------------------------------->

    <div class="row justify-content-center">

    <div class="col-9">


    <div class="card bg bg-dark
    ">

    <div class="card-body">

    <div class="row justify-content-center">


    <div class="col-6"><h5 class="card-title text-center white">Lista de productos</h5></div>
    <div class="col-6">
    <form action="<?php echo e(url('/producto')); ?>" method="get">
    <?php echo csrf_field(); ?>

    <label class="white"for="categoria"><i class="fa-solid fa-filter"></i> Filtrar por categoria:</label>

    <div class="d-flex">

    <div class="col-8 m-0">

    <select name="categorias" id="categorias"class="form-select text-center" aria-label="Default select example" required>

    <option value="all">Ver todos los productos</option>
    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>


    </div>

    <div class="col-3">

    <button type="submit" class="btn btn-primary text-center m-0"><i class="fa-solid fa-magnifying-glass"></i></button>

    </div>

    </div>

    </form>
    </div>

    </div>





<!--------------------TABLA DE PRODUCTOS--------------------------->


<div
    class="table-responsive"
>
    <table
        class="table table-light"
    >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Ver imagen</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="">

                <td scope="row"><span class="badge bg-info p-2"><?php echo e($producto->id); ?></span></td>
                <td scope="row"><?php echo e($producto->nombre); ?></td>
                <td scope="row"><i><?php echo e($producto->descripcion); ?></i></td>
                <td scope="row"><span class="badge bg-warning black">$ <?php echo e($producto->precio); ?></span></td>
                <?php if(isset($producto->imagen)): ?>
                <td scope="row">
                <img src="<?php echo e(asset('storage/'.$producto->imagen)); ?>" alt="" height="100" width="100">

                </td>
                <?php endif; ?>
                <td scope="row"><span class="badge bg-primary"><?php echo e($producto->categoria); ?></span></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

http://localhost/mercado/public/storage/laptop.png

http://localhost/mercado/storage/app/public/uploads/productos/laptop2.jpg


<!---------------------------------------------------------------->
        </div>
    </div>



    </div>


    </div>









        <footer>



           <h5 class="white p3 redondo text-center">Demo técnica hecha por Daniel Cortes Vaca <?php echo date('Y'); ?></h5>


        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<?php /**PATH C:\wamp64\www\mercado\resources\views/index.blade.php ENDPATH**/ ?>