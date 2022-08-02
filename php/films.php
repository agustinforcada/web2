<!DOCTYPE html>
<html lang="es">

<?php require_once("../config/config.php");?>
<head>
    <?php require_once(BASE_URL."layout/_head.php") ?>
  <title>[23] BAFICI - HISTORICO</title>
</head>

<body>

  <!--NAVBAR -->
  <?php require_once(BASE_URL."layout/_navbar.php")?>


  <!--COVER FILMS -->

  <head>
    <div>
      <img class="img-fluid" src=<?php echo BASE_URL."img/coverhistorico.jpg"?> alt="Imagen Films Historicos del BAFICI">
    </div>
  </head>

  <!-- FILMS HISTORICOS LISTADO -->
  <div class="container">
    <div class="mx-md-5 my-2">
      <h1 class="fuenteXXLarge mt-4 d-flex justify-content-center">FILMS</h1>

      <div class="container">
        <div class="album py-5 ">
          <div class="container">
            <div class="row">

              <!-- CONEXION -->
              <?php require_once("_conexion.php");
              require_once("paginador.php");

              $conexion = getConexionHistorico();

              $pag = $_GET['pag'] ?? 1;
              $cantidad = countFilms($conexion);
              $paginacion = paginador($cantidad, $pag);
              $films = getFilms($conexion, $pag, 5);
              unset($conexion);
              ?>


              <!-- TABLA -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">TITULO</th>
                    <th scope="col">SINOPSIS</th>
                    <th scope="col">ACTORES</th>
                </thead>
                <!-- FOREACH -->

                <?php foreach ($films as $film) : ?>
                  <tbody>
                    <tr>
                      <td><?php echo $film['title'] . " - (" . $film['year_'] . ")" ?></td>
                      <td><?php echo $film['synopsis_es'] ?></td>
                      <td><?php echo $film['cast_'] ?></td>
                    </tr>
                  </tbody>
                <?php endforeach ?>

              </table>

              <!-- PAGINAS -->
              <div class="container">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <?php if ($paginacion['anterior']) : ?>
                      <li class="page-item">
                        <a class="page-link" href="films.php?pag=<?php echo $paginacion['primero'] ?>"> Primero </a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="films.php?pag=<?php echo $paginacion['anterior'] ?>"> <?php echo $paginacion['anterior'] ?> </a>
                      </li>
                    <?php endif ?>
                    <li class="page-item active">
                      <span class="page-link">
                        <?php echo $paginacion['actual'] ?>
                      </span>
                    </li>
                    <?php if ($paginacion['siguiente']) : ?>
                      <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginacion['siguiente'] ?>"> <?php echo $paginacion['siguiente'] ?> </a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginacion['ultimo'] ?>"> Último </a>
                      </li>
                    <?php endif ?>
                  </ul>
                </nav>

              </div>


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