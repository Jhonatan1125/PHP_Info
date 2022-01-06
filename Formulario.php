<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'head.php'; ?>
    <title>Formularios|Info,Tipos</title>
</head>

<body>
    <div class="container">
        <?php include_once 'nav.php' ?>
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar align-right">
                    <form class="">
                        <h2>Formularios <a href="Form-Ejm.php" class="btn btn-info">Ejemplo</a></h2>

                    </form>
                </nav>
            </div>
        </div>
        <div class="row centrado">
            <div class="col-md-7">
                <h4>Tipos de input</h4>
                <hr>
                <div class="accordion" id="accordionExample">
                    <div class="card"><!-- Button -->
                        <div class="card-header" id="Button1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Btn1" aria-expanded="true" aria-controls="Btn1">
                                    <strong>Button</strong>
                                </button>
                            </h2>
                        </div>

                        <div id="Btn1" class="collapse" aria-labelledby="Button1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="button" class="btn btn-primary" value="Enviar">
                                </div>
                                <pre><code>&lt;input type="button" class="btn btn-primary" value="Enviar"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Checkbox -->
                        <div class="card-header" id="Checkbox1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Check1" aria-expanded="false" aria-controls="Check1">
                                    <strong>Checkbox</strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Check1" class="collapse" aria-labelledby="Checkbox1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="checkbox" value="Valor" name="valor1">
                                    <label for="valor1">valor 1</label>
                                </div>
                                <pre><code>&lt;input type="checkbox" class="btn btn-primary" value="Valor" name="valor1"&gt;<br>&lt;label for="valor1"&gt;valor1&lt;/label&gt;
                                </code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Color -->
                        <div class="card-header" id="Color1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Col1" aria-expanded="false" aria-controls="Col1">
                                    <Strong>Color</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Col1" class="collapse" aria-labelledby="Color1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="favcolor">Seleccione el color:</label>
                                    <input type="color" id="favcolor" name="favcolor">
                                </div>
                                <pre><code>&lt;label for="favcolor"&gt;Seleccione el color&lt;/label&gt;<br>&lt;input type="color" id="favcolor" name="favcolor"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Date -->
                        <div class="card-header" id="Date1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Dat1" aria-expanded="false" aria-controls="Dat1">
                                    <Strong>Date</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Dat1" class="collapse" aria-labelledby="Date1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="date" class="btn btn-info">
                                </div>
                                <pre><code>&lt;input type="date" class="btn btn-info"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Datetime-local -->
                        <div class="card-header" id="DateTime1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Datime1" aria-expanded="false" aria-controls="Datime1">
                                    <Strong>Datetime-local</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Datime1" class="collapse" aria-labelledby="DateTime1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="datetime-local" class="btn btn-info">
                                </div>
                                <pre><code>&lt;input type="datetime-local" class="btn btn-info"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Email -->
                        <div class="card-header" id="Email1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Mail1" aria-expanded="false" aria-controls="Mail1">
                                    <Strong>Email</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Mail1" class="collapse" aria-labelledby="Email1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">

                                </div>
                                <pre><code>&lt;input type="email" class="form-control" placeholder="Email"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- File -->
                        <div class="card-header" id="File1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Fil1" aria-expanded="false" aria-controls="Fil1">
                                    <Strong>File</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Fil1" class="collapse" aria-labelledby="File1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="file" class="btn btn-warning">
                                </div>
                                <pre><code>&lt;input type="file" class="btn btn-warning"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Hidden -->
                        <div class="card-header" id="Hidden1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Hid1" aria-expanded="false" aria-controls="Hid1">
                                    <Strong>Hidden</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Hid1" class="collapse" aria-labelledby="Hidden1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Oculto</label>
                                    <input type="hidden" value="32">
                                </div>
                                <pre><code>&lt;input type="hidden" value="32"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Image -->
                        <div class="card-header" id="Image1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Img1" aria-expanded="false" aria-controls="Img1">
                                    <Strong>Image</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Img1" class="collapse" aria-labelledby="Image1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Submit con imagen</label>
                                    <input type="image" src="/cursophp/theme/img/enviar.ico" alt="Submit" width="38" height="38">
                                </div>
                                <pre><code>&lt;label for=""&gt;Submit con imagen&lt;/label&gt;<br>&lt;input type="image" src="img/enviar.ico" alt="Submit" width="38" height="38"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Month -->
                        <div class="card-header" id="Month1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Mon1" aria-expanded="false" aria-controls="Mon1">
                                    <Strong>Month</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Mon1" class="collapse" aria-labelledby="Month1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="month" class="btn btn-info">
                                </div>
                                <pre><code>&lt;input type="month" class="btn btn-info"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Number -->
                        <div class="card-header" id="Number1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Num1" aria-expanded="false" aria-controls="Num1">
                                    <Strong>Number</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Num1" class="collapse" aria-labelledby="Number1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="number" class="btn btn-dark">
                                </div>
                                <pre><code>&lt;input type="number" class="btn btn-dark"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Password -->
                        <div class="card-header" id="Password1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Pass1" aria-expanded="false" aria-controls="Pass1">
                                    <Strong>Password</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Pass1" class="collapse" aria-labelledby="Password1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contraseña">
                                </div>
                                <pre><code>&lt;input type="password" class="form-control" placeholder="Contraseña"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Radio -->
                        <div class="card-header" id="Radio1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Rad1" aria-expanded="false" aria-controls="Rad1">
                                    <Strong>Radio</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Rad1" class="collapse" aria-labelledby="Radio1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="radio" value="Valor1">
                                    <label for="">Valor1</label>
                                </div>
                                <pre><code>&lt;input type="radio" value="Valor1"&gt;<br>&lt;label for=""&gt;Valor1&lt;/label&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Range -->
                        <div class="card-header" id="Range1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Ran1" aria-expanded="false" aria-controls="Ran1">
                                    <Strong>Range</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Ran1" class="collapse" aria-labelledby="Range1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="range" id='rango' min='0' max='90' step="30" value="40">
                                </div>
                                <pre><code>&lt;input type="range" id='rango' min='0' max='90' step="30" value="40"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Reset -->
                        <div class="card-header" id="Reset1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Res1" aria-expanded="false" aria-controls="Res1">
                                    <Strong>Reset</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Res1" class="collapse" aria-labelledby="Reset1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="reset" class="btn btn-danger" value="Limpiar">
                                </div>
                                <pre><code>&lt;input type="reset" class="btn btn-danger" value="Limpiar"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Search -->
                        <div class="card-header" id="Search1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Ser1" aria-expanded="false" aria-controls="Ser1">
                                    <Strong>Search</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Ser1" class="collapse" aria-labelledby="Search1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="search" class="btn btn-light">
                                    <button class="btn btn-dark">Buscar</button>
                                </div>
                                <pre><code>&lt;input type="search" class="btn btn-light"&gt;<br>&lt;button class="btn btn-dark"&gt;Buscar&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Submit -->
                        <div class="card-header" id="Submit1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Sub1" aria-expanded="false" aria-controls="Sub1">
                                    <Strong>Submit</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Sub1" class="collapse" aria-labelledby="Submit1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-warning" value="Enviar">
                                </div>
                                <pre><code>&lt;input type="submit" class="btn btn-warning" value="Enviar"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Tel -->
                        <div class="card-header" id="Tel1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#t1" aria-expanded="false" aria-controls="t1">
                                    <Strong>Tel</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="t1" class="collapse" aria-labelledby="Tel1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="tel" class="btn btn-link" placeholder="Telefono">
                                </div>
                                <pre><code>&lt;input type="tel" class="btn btn-link" placeholder="Telefono"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Time -->
                        <div class="card-header" id="Time1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Tim1" aria-expanded="false" aria-controls="Tim1">
                                    <Strong>Time</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Tim1" class="collapse" aria-labelledby="Time1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="time" class="btn btn-warning">
                                </div>
                                <pre><code>&lt;input type="time" class="btn btn-warning"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Url -->
                        <div class="card-header" id="Url1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#Ur1" aria-expanded="false" aria-controls="Ur1">
                                    <Strong>Url</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="Ur1" class="collapse" aria-labelledby="Url1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="url" class="btn btn-link" placeholder="Link">
                                </div>
                                <pre><code>&lt;input type="url" class="btn btn-link" placeholder="Link"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card"><!-- Week -->
                        <div class="card-header" id="Week1">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#We1" aria-expanded="false" aria-controls="We1">
                                    <Strong>Week</Strong>
                                </button>
                            </h2>
                        </div>
                        <div id="We1" class="collapse" aria-labelledby="Week1" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="week" class="btn btn-warning">
                                </div>
                                <pre><code>&lt;input type="week" class="btn btn-warning"&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Validaciones de campos</h3>
                        <?php
                        $mensaje = '';
                        $color = '';
                        if (isset($_POST["enviar"])) {
                            //validar el email y envio
                            if (filter_has_var(INPUT_POST, "info")) {
                                if (filter_input(INPUT_POST, "info", FILTER_VALIDATE_EMAIL)) {
                                    $mensaje = 'es un email valido';
                                    $color = 'success';
                                } else {
                                    $mensaje = 'No es es un email valido';
                                    $color = 'warning';
                                }
                            } else {
                                $mensaje = 'No se envio la informacion';
                                $color = 'danger';
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
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="info" required pattern="[A-Za-z]+">
                            </div>
                            <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Texto</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php include_once 'Footer.php';?>
</body>

</html>