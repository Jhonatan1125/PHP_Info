<?php


//Listar los archivos en un directorio
$ruta = 'Introduccion/Carpetas';
$resultado = scandir($ruta);
var_dump($resultado);
?>