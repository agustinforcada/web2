<!DOCTYPE html>
<html lang="es">


<?php require_once("../config/config.php");?>

<head>
<?php require_once(BASE_URL."layout/_head.php" )?>

<title>[23] BAFICI - Sedes</title>
</head>

<body>

  <!--NAVBAR -->
  <?php require_once(BASE_URL."layout/_navbar.php")?>

  <!--COVER SEDES -->
  <head>
    <div>
      <img class="img-fluid" src=<?php echo BASE_URL."img/coversedes.jpg"?> alt="Imagens Sedes del BAFICI">
    </div>
  </head>

   <!-- SEDES LISTADO -->
  <div class="container">
    <div class="mx-md-5 my-2">
      <h1 class="fuenteXXLarge mt-4 d-flex justify-content-center">SEDES</h1>

      <div class="container">
        <div class="album py-5 ">
          <div class="container">
            <div class="row">

              <?php require_once("_conexion.php");
              $conexion = getConexion();

              $sedes = getSedes($conexion); ?>
              <?php foreach ($sedes as $sede) : ?>


                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src=<?php echo BASE_URL."img/". $sede['imagensede'] ?> alt="Imagen Programacion Bafici">
                    <div class="card-body">
                      <p class="card-text text-center fw-bold Warning text-uppercase"><?php   echo $sede['nombre'] ?></p>
                      <p class="card-text text-center  fw-bold Warning text-secondary"><?php  echo $sede['direccion'] ?></p>

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



  </div>
  </div>
  <!-- FOOTER-->
  <?php require_once(BASE_URL."layout/_footer.html"); ?>
  <!-- Bootstrap-->
  <?php require_once(BASE_URL."layout/_boostrap.php") ?>
</body>

</html>