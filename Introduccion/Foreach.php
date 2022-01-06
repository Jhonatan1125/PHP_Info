<h2>Foreach</h2>
<hr>
<p>Es un ciclo especializado para recorrer arreglos</p>
<pre><code>//creacion de array
$colores = array("Blanco","Rojo","Azul","Amarillo");

//recorre todos los campos de la array
foreach ($colores as $valor) {
    echo "$valor";
}


//array asociativa
$persona = array("jose" => "21", "Juan" => "22","Rodrigo" => "34");

//funciona para recorrer una array asociativa
foreach ($persona as $key => $valor) {
    echo "$key => $valor";
}
</code></pre>
<?php
//Probar codigo

?>