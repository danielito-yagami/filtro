<!doctype html>
<html lang="en">
    <head>
        <title>Prueba Tecnica</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        ><i class="fa-solid fa-gear"></i>Agregar</a
                    >
                    <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownId"
                    >
                        <a id="boton1"class="dropdown-item" href="#producto"
                            ><span class="badge bg-info"><i class="fa-solid fa-plus"></i></span> Productos</a
                        >
                        <a id="boton2"class="dropdown-item" href="#categoria"
                            >
                            <span class="badge bg-success"><i class="fa-solid fa-plus"></i> </span>
                            Categorias</a
                        >
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>

<br><br><br><br>
<br><br>

<!------------------------------------------------->

    <div class="row justify-content-center">

    <div class="col-8">
    <?php if( Session::has('mensaje')): ?>

    <h4 id="msj"class=""> <?php echo e(Session::get('mensaje')); ?></h4>

    <?php endif; ?>

    <h4 id="msj3"class=""></h4>
    <!---
    <?php if( Session::has('msj2')): ?>

    <h4 id="msj2"class=""> <?php echo e(Session::get('msj2')); ?></h4>

    <?php endif; ?>
    -->
    <div id="bienvenida" class="mt-4 p-5 bg-success text-white rounded">
    <?php echo $__env->make("./bienvenida/bienvenida", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>



    <!---formularios---->

    <div id="producto"class="productos">

    <?php echo $__env->make("./producto/create", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    </div>

    <div id="categoria" class="categorias">

    <?php echo $__env->make("./categorias/create", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    </div>


    </div>


    </div>




<br>




        <footer>



           <h5 class="white p1 redondo text-center">Demo hecha por Daniel Cortes Vaca <?php echo date('Y'); ?></h5>


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

        <script src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/menu.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/producto.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\wamp64\www\prueba\resources\views/edit.blade.php ENDPATH**/ ?>