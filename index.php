<?php require_once("config/config.php") ?> 
<!doctype html>
<html lang="es">

<head>

<?php require_once(BASE_URL."layout/_head.php") ?>

  <title>[23] BAFICI - INICIO</title>
</head>

<body>



  <!--NAVBAR -->
  
  <?php require_once(BASE_URL."layout/_navbar.php") ?>

  <!--HERO -->
  <div class="hero-image">
    <div class="centro">
      <div class="px-4 py-5 my-5 text-center">
        <img class="buho d-block py-5 mx-auto mb-4 animate__animated animate__fadeIn" src=<?php echo BASE_URL."img/buho.png"?> alt="Imagen Buho">
        <h1 class="display-5 fw-bold text-light animate__animated animate__jackInTheBox">Festival Internacional de Cine Independiente</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4 text-light animate__animated animate__fadeIn">BAFICI es uno de los festivales de cine más importantes de América Latina. Todos los años reúne las películas más destacadas de innovadores cineastas nacionales e internacionales y, consolidado como una de las grandes propuestas culturales de cada año en Buenos Aires, en su 23° edición invita al público a volver a las salas de cine.</p>
          <a class="btn btn-dark  text-light btn-lg px-4 gap-3" href=<?php echo BASE_URL."doc/programacionbafici.pdf"?> role="button">Programacion</a>
        </div>
      </div>
    </div>
  </div>
  <!--SECCIONES -->

  <div class="container">
    <div class="album py-5 ">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" src=<?php echo BASE_URL."img/programacion.jpg"?> alt="Imagen Programacion Bafici">
              <div class="card-body">
                <p class="card-text ">Conoce al programación completa de este festival y encontrá todas las peliculas Internacionales y Nacionales del mejor cine independiente. </p>
                <a href=<?php echo BASE_URL. "php/programacion.php"?> class="btn btn-sm btn-outline-secondary d-flex justify-content-center">PROGRAMACION</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" src=<?php echo BASE_URL."img/sedes.jpg"?> alt="Imagen Sedes Bafici">
              <div class="card-body">
                <p class="card-text">Todas nuestras sedes se encuentran esperándote para que vivas de la mejor manera esta experiencia que ofrece el festival. Disfrutá de las mejores salas. </p>
                <a href="<?php echo BASE_URL. "php/sedes.php"?>" class="btn btn-sm btn-outline-secondary d-flex justify-content-center">SEDES</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" src=<?php echo BASE_URL."img/contacto.jpg"?> alt="Imagen Contacto Bafici">
              <div class="card-body">
                <p class="card-text">Todo nuestro equipo se encuentra a disposición para recibir todas y cada una de tus consultas sobre el festival. No dudes y comunicate </p>
                <a href="<?php echo BASE_URL. "php/contacto.php"?>" class="btn btn-sm btn-outline-secondary d-flex justify-content-center">CONTACTO</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--SECCIONES -->

  <div class="container">
    <div class="album py-5 ">
      <div class="container">
        <div class="row">


          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" src=<?php echo BASE_URL."img/vivamos.jpg"?> alt="Imagen Vivamos Cultura">
              <div class="card-body">
                <p class="card-text">Un resumen completo de las numerosas expresiones artisticas de la Ciudad de Buenos Aires para que no te pierdas de ninguna novedad. </p>
                <a href="https://vivamoscultura.buenosaires.gob.ar/" class="btn btn-sm btn-outline-secondary d-flex justify-content-center">Conocer más</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" src=<?php echo BASE_URL."img/federal.jpg"?> alt="Imagen Cultura Federal">
              <div class="card-body">
                <p class="card-text">Viví en la Ciudad las mejores expresiones de todo el país tiendo la posibilidad de tener un recorrido federal. </p>
                <a href="https://vivamoscultura.buenosaires.gob.ar/home/87-culturafederal/" class="btn btn-sm btn-outline-secondary d-flex justify-content-center">Conocer más</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" src=<?php echo BASE_URL."img/colectivo.jpg"?> alt="Imagen Colectivo Editorial">
              <div class="card-body">
                <p class="card-text">Muestra del trabajo cultural de las editoriales independientes de Argentina y Latinoamérica. Una gran apuesta por la publicación de autoras y autores. </p>
                <a href="https://vivamoscultura.buenosaires.gob.ar/home/87-culturafederal?contenido=2276-colectivo-editorial" class="btn btn-sm btn-outline-secondary d-flex justify-content-center">Conocer más</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- MARCAS -->

  <div class="marcas">
    
    <div class="container marcas md-bloc d-flex justify-content-center">
        <div class="row">
          <div class="col-sm">
            <img class="img-fluid rounded mx-auto d-block" src="img/ba.png" >
          </div>
          <div class="col-sm">
            <img class="img-fluid rounded mx-auto d-block" src="img/ciudad.png" alt="">
          </div>
          <div class="col-sm">
            <img class="img-fluid rounded mx-auto d-block" src="img/cultura.png" alt="">
          </div>
  
        </div>
      </div>
    </div>



    

  <!-- FOOTER-->
  <?php require_once (BASE_URL.'layout/_footer.html') ?>

  
  
  
  <!-- Bootstrap-->
  <?php require_once(BASE_URL."layout/_boostrap.php") ?>


</body>

</html>