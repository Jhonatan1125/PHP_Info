<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'head.php'; ?>
    <title>Sesiones y Cookies</title>
</head>

<body>
    <div class="container">
        <?php include_once 'nav.php' ?>


        <div class="row centrado">
            <div class="col-md-12">
                <?php
                $mensaje = '';
                $color = '';

                if (isset($_POST["enviar"])) {
                    if ($_POST["usuario"] == '' || $_POST["email"] == '') {
                        $mensaje = 'Por favor ingrese todos los campos';
                        $color = 'warning';
                    } else {
                        session_start();
                        $_SESSION["usuario"] = htmlentities($_POST["usuario"]);
                        $_SESSION["email"] = htmlentities($_POST["email"]);
                        $usuario = htmlentities(($_POST['usuario']));
                        //configurar cookie
                        setcookie('usuario', $usuario, time() + 3600);

                        header("Location: index.php");
                    }
                }
                ?>
                <?php
                if (!$mensaje == '') : ?>
                    <div class="alert alert-<?php echo $color; ?> alert-dismissible fade show" role="alert">
                        <strong><?php echo $mensaje; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <form action="" method="POST">
                    <div class="input-group row">
                        <label for="usuario" class="col-sm-2 col-form-label">Ingresa tu usuario</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario31" required>
                        </div>
                    </div>
                    <div class="input-group row">
                        <label for="email" class="col-sm-2 col-form-label">Ingresa tu email</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" name="email" placeholder="Ejemplo@gmail.com" required>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="enviar" name="enviar">
                </form>



            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>