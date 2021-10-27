<?php

$colores = array("Blanco","Rojo","Azul","Amarillo");

foreach ($colores as $valor) {
    echo "$valor <br>";
}

echo "<br>";

$persona = array("jose" => "21", "Juan" => "22","Rodrigo" => "34");

foreach ($persona as $key => $valor) {
    echo "$key => $valor"."<br>";
}
?>