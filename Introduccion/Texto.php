<h2>Strings</h2>
<hr>
<?php
//Ejercicio 1:Combinar strings usando (.)

$nombre = "Jose";
$apellidos = 'Montoya';

$nombrecompleto = $nombre ." ". $apellidos ;
?>
<h3>Contar caracteres</h3>
<?php
echo $nombrecompleto. " <strong>Strlen =</strong>" . strlen($nombrecompleto);
echo "<br>";
echo "<h3>Bloque de texto continuo</h3>";
echo <<< TEXTO1
esto es un bloque de texto con los simbolos (>>>)
TEXTO1;
?>
<h3>Buscar palabra</h3>
<?php
$texto = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse culpa eaque nemo ducimus numquam, nihil dolorum deserunt velit modi consequatur? Exercitationem odit iste beatae saepe quisquam in aliquam. Recusandae, aut.';
$buscar = "elit";

$posicion = strpos($texto, $buscar);
echo $texto;
echo "<br>";
echo "Posicion de elit: ".$posicion;
?>
<h3>Convertir palabras a mayusculas y minusculas</h3>
<?php
echo strtoupper($texto);
echo "<br>";
echo strtolower($texto);
?>