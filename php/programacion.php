<!DOCTYPE html>
<html lang="es">
<?php require_once("../config/config.php");?>
<head>
    <?php require_once(BASE_URL."layout/_head.php") ?>
    <title>[23] BAFICI - Programacion</title>
</head>

<body>
    <!--NAVBAR -->
    <?php require_once(BASE_URL."layout/_navbar.php")?>
    <!--COVER PROGRAMACION -->
    <header>
        <div>
            <img class="img-fluid" src= <?php echo BASE_URL."img/coverprog.jpg"?> alt="imagen de programacaion">
        </div>
    </header>


   <!-- PROGRAMACION LISTADO -->
    <div class="container">

        <div class="mx-md-5 my-1">
            <h1 class="fuenteXXLarge mt-4 d-flex justify-content-center">PROGRAMACION</h1>

            <?php require_once("_conexion.php");
            $conexion = getConexion();
            $funciones = getProgramacion($conexion); ?>

            <div class="container">
                <div class="album py-5 ">
                    <div class="container">
                        <div class="row">

                            <?php foreach ($funciones as $funcion) : ?>


                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" src="../img/<?php echo $funcion['img'] ?>" alt="Imagen Programacion Bafici">
                                        <div class="card-body">
                                            <p class="card-text text-center fw-bold Warning text-uppercase"><?php echo $funcion['titulo'] ?></p>
                                            <p class="card-text text-center  fw-bold Warning text-secondary"><?php echo $funcion['director'] ?></p>
                                            <p class="card-text text-justify "><?php echo $funcion['sinopsis'] ?></a>
                                            <p class="card-text text-center fw-bold Warning text-secondary"><?php echo $funcion['funcion'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <!-- FOOTER-->
  <?php require_once(BASE_URL."layout/_footer.html"); ?>
  <!-- Bootstrap-->
  <?php require_once(BASE_URL."layout/_boostrap.php") ?>
</body>

</html>