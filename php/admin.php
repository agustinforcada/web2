<!DOCTYPE html>
<html lang="es">

<?php require_once("../config/config.php"); ?>

<head>
  <?php require_once(BASE_URL . "layout/_head.php") ?>
  <title>[23] BAFICI - ADMINISTRACION</title>
</head>

<body>


  <!--NAVBAR -->
  <?php require_once(BASE_URL . "layout/_navbar.php") ?>

  <!--cover -->
  <header>
    <img class="img-fluid" src=<?php echo BASE_URL . "img/covercontacto.jpg" ?> alt="">
  </header>


  <!--FORM -->


  <div class="container mb-5">

    <br><br>

    <h1>ADMINISTRACION DE PROGRAMACION</h1>

    <br><br>
 <!-- INGRESO DE DATOS -->  
    <div class="row">
      <div class="col-md-6">
        <h3>Añadir Programacion</h3>

        <form action="_addProgamacion.php" id="form" method="post" novalidate="">
          <div class="form-group">
            <label for="id_programacion">Id</label>
            <input class="form-control" type="text" name="id_programacion">
          </div>

          <div class="form-group">
            <label for="img">Imágen</label>
            <input class="form-control" type="text" name="img">
          </div>

          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input class="form-control" type="text" name="titulo">
          </div>

          <div class="form-group">
            <label for="director">Director</label>
            <input class="form-control" type="text" name="director">
          </div>

          <div class="form-group">
            <label for="sinopsis">Sinopsis</label>
            <textarea class="form-control" type="text" name="sinopsis" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="funcion">Funcion</label>
            <input class="form-control" type="text" name="funcion">
          </div>


          <input class="btn btn-success mt-2" type="submit" value="Añadir">

          <!-- SUBIR ARCHIVO -->  
          <form action="_subirArchivos.php" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3 mt-4">
              <label for="archivo"> Archivo </label>
              <input type="file" class="form-control-file" name="archivo" id="archivo">
            </div>
            <button type="submit" class="btn btn-success mt-2">Subir</button>
          </form>

        </form>
      </div>

      <!-- ACTUALIZACION DE DATOS -->  
      <div class="col-md-6">
        <h3>Actualizar Programacion</h3>

        <form action="_updateProgamacion.php" id="form" method="post" novalidate="">
          <div class="form-group">
            <label for="id_programacion">Id</label>
            <input class="form-control" type="text" name="id_programacion">
          </div>

          <div class="form-group">
            <label for="img">Imágen</label>
            <input class="form-control" type="text" name="img">
          </div>

          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input class="form-control" type="text" name="titulo">
          </div>

          <div class="form-group">
            <label for="director">Director</label>
            <input class="form-control" type="text" name="director">
          </div>

          <div class="form-group">
            <label for="sinopsis">Sinopsis</label>
            <textarea class="form-control" type="text" name="sinopsis" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="funcion">Funcion</label>
            <input class="form-control" type="text" name="funcion">
          </div>
          <input class="btn btn-warning mt-4" type="submit" value="Modificar">
          
          <!-- SUBIR ARCHIVO -->

          <form action="_subirArchivos.php" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3 mt-4">
              <label for="archivo"> Archivo </label>
              <input type="file" class="form-control-file" name="archivo" id="archivo">
            </div>
            <button type="submit" class="btn btn-warning mt-2">Subir</button>
          </form>
        </form>
      </div>
 
 
      <!-- BORRAR  DATOS -->  
      <div class="col-md-12 mt-4">
        <h3>BORRAR Programacion</h3>
        <form action="_deleteProgamacion.php" id="form" method="post" novalidate="">
          <div class="form-group">
            <label for="id_programacion">Id</label>
            <input class="form-control" type="text" name="id_programacion">
          </div>

          <input class="btn btn-danger mt-2" type="submit" value="Borrar">

        </form>
      </div>

    </div>
  </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./JS/js.js"></script>

  <!-- FOOTER-->
  <?php require_once(BASE_URL . "layout/_footer.html"); ?>
  <!-- Bootstrap-->
  <?php require_once(BASE_URL . "layout/_boostrap.php") ?>
</body>
</body>

</html>