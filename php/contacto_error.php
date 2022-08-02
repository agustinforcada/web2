<!DOCTYPE html>
<html lang="es">

<?php require_once("../config/config.php");?>
<head>
  <?php require_once(BASE_URL."layout/_head.php") ?>
  <title>Contacto: Error</title>
</head>



<body>

<?php require_once(BASE_URL."layout/_navbar.php")?>

  <!--cover -->
  <div>
    <img class="img-fluid d-flex justify-content-center" src=<?php echo BASE_URL."img/error.jpg"?> alt="">
  </div>

  <div class="container">
    <a class="btn btn-dark  btn-lg" href="../contacto.php" role="button">VOLVER A CONTACTO</a>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <!-- FOOTER-->
 <?php require_once(BASE_URL."layout/_footer.html"); ?>
  <!-- Bootstrap-->
  <?php require_once(BASE_URL."layout/_boostrap.php") ?>


</body>

</html>