<!DOCTYPE html>
<html lang="es">

<?php require_once("../config/config.php"); ?>

<head>
    <?php require_once(BASE_URL . "layout/_head.php") ?>
    <title>[23] BAFICI - CONTACTO</title>
</head>

<body>

    <!--NAVBAR -->
    <?php require_once(BASE_URL . "layout/_navbar.php") ?>


    <!--COVER FILMS -->

    <head>
        <div>
            <img class="img-fluid" src=<?php echo BASE_URL . "img/covercontacto.jpg" ?> alt="Imagen Films Historicos del BAFICI">
        </div>
    </head>

    <!-- FORMULARIO DE CONTACTO CON VALIDACION FRONT END -->

    <div class="container my-5 col-xs-1">

        <form class="row g-1 needs-validation col-xs-3" action="_contacto_post.php" method="POST" novalidate>

            <div class="mb-2 col-xs-1">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Escriba su nombre" required>
                <div class="invalid-feedback">
                    Por favor ingrese su nombre.
                </div>
            </div>

            <div class="mb-2">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control" id="telefono" placeholder="Escriba su telefono" required>
                <div class="invalid-feedback">
                    Por favor ingrese numero telefónico.
                </div>
            </div>

            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Escriba su email" required>
                <div class="invalid-feedback">
                    Por favor ingrese correo electronico
                </div>
            </div>

            <div class="mb-2">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea type="text" class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Escriba su mensaje" required></textarea>

                <div class="invalid-feedback">
                    Por favor ingrese correo electronico
                </div>
            </div>


            <div class="mb-2">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>


    <script src="js.js"></script>
    <!-- FOOTER-->
    <?php require_once(BASE_URL . "layout/_footer.html"); ?>
    <!-- Bootstrap-->
    <?php require_once(BASE_URL . "layout/_boostrap.php") ?>
</body>

</html>