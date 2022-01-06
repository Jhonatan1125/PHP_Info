<?php
session_start();
if (isset($_SESSION["usuario"])) {
    $nombre = '<i class="fas fa-user"></i> ' . $_SESSION["usuario"];
} else {
    $nombre = '<a href="Sesion_Cookie.php" class="nav-link">Iniciar Sesion <i class="fas fa-power-off"></i></a>';
}
?>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <a class="navbar-brand" href="/Cursophp/index.php">
        <img src="\Cursophp\theme\img\php.png" width="50" height="30" class="d-inline-block align-top" alt="">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/Cursophp/index.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Formulario
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/Cursophp/Formulario.php">Acerca de</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/Cursophp/Conversor_Log">Eje. Logitud</a>
                    <a class="dropdown-item" href="#">otros</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Sesion_Cookie.php">Boton</a>
            </li>
            <!--Desplegable
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Desplegable
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">action</a>
                    <a class="dropdown-item" href="#">action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>-->
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-link"><?php echo $nombre; ?></li>
        </ul>

    </div>


</nav>