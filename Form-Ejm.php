<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'head.php'; ?>
    <title>Ejemplo Formulario</title>
</head>

<body>
    <div class="container">
        <?php include_once 'nav.php' ?>
        <div class="row centrado">
            <!--
                Diferentes tipos de validacion
                FILTER_VALIDATE_BOOLEAN
                FILTER_VALIDATE_EMAIL
                FILTER_VALIDATE_FLOAT
                FILTER_VALIDATE_INT
                FILTER_VALIDATE_IP
                FILTER_VALIDATE_REGEXP
                FILTER_VALIDATE_URL
                FILTER_VALIDATE_DOMAIN
                Tambien existen para sanear
                FILTER_SANITIZE_URL
                FILTER_SANITIZE_EMAIL
                otros...
            -->
            <div class="col-md-6">
                <form action="" method="GET">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control" name="pass">
                    </div>

                    <div class="form-group">
                        <label for="Tip_documento">Tipo de Documento</label>
                        <select name="Tip_documento" class="form-control">
                            <option value="Cedula">Cedula</option>
                            <option value="Registro civil">Registro Civil</option>
                            <option value="Extrangera">Extrangera</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Enviar">
                </form>
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo isset($_GET['nombre']) ? $_GET['nombre'] : 'Null'; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="text" class="form-control" name="pass" value="<?php echo isset($_GET['pass']) ? $_GET['pass'] : 'Null'; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="Tip_documento">Tipo de Documento</label>
                    <input type="text" class="form-control" name="Tip_documento" value="<?php echo isset($_GET['Tip_documento']) ? $_GET['Tip_documento'] : 'Null'; ?>" disabled>
                </div>

            </div>


        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>