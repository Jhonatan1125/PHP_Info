<?php

function ValidarUsuario($email)
{
    if (empty($email)) {
        echo "El usuario esta vacio";
        return;
    }

    switch ($email) {
        case 'admin@gmail.com':
            echo "Bienvenido Admin";
            break;
        case 'cliente@gmail.com':
            echo "Bienvenido Cliente";
            break;
        
        default:
            echo "Usuario no existe";
            break;
    }

}

ValidarUsuario("admin@gmail.com");
echo "<br>";
ValidarUsuario("cliente@gmail.com");
echo "<br>";
ValidarUsuario("");
echo "<br>";