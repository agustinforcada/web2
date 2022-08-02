

<?php require_once("../config/config.php")?>

 <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container ">
        <a class="navbar-brand" href="<?php echo BASE_URL?>index.php"><img src="<?php echo BASE_URL?>img/logobafici.png" alt="Logo" height="50%" width="50%"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="m-auto"></div>
          <ul class="navbar-nav me-auto mb-3 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo BASE_URL?>index.php">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL?>php/programacion.php">PROGRAMACION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL?>php/sedes.php">SEDES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL?>php/films.php">HISTORICO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL?>php/contacto.php">CONTACTO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL?>php/admin.php">ADMIN</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </header>