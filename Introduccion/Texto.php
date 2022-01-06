<h2>Strings</h2>
<hr>
<p>El texto y el codigo se puede unir con el signo (.) y se puede jugar con esta opcion para cumplir una funcion determinada</p>
<pre><code>//Ejercicio 1:Combinar strings usando (.)

$nombre = "Jhonatan";
$apellidos = 'Gonzalez';
$nombrecompleto = $nombre ." ". $apellidos." es mi nombre" ;

echo $nombrecompleto. " <strong>Strlen =</strong>" . strlen($nombrecompleto);
</code></pre>
<?php
//Probar codigo
$nombre = "Jhonatan";
$apellidos = 'Gonzalez';
$nombrecompleto = $nombre ." ". $apellidos." es mi nombre" ;

echo $nombrecompleto. " <strong>Strlen =</strong>" . strlen($nombrecompleto);

?>
<h3>Buscar palabra</h3>
<pre><code>$texto = 'lorem';
$buscar = "elit";

$posicion = strpos($texto, $buscar);
echo "Posicion de elit: ".$posicion;
</code></pre>
<?php
//Probar codigo
$texto = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse culpa eaque nemo ducimus numquam, nihil dolorum deserunt velit modi consequatur? Exercitationem odit iste beatae saepe quisquam in aliquam. Recusandae, aut.';
$buscar = "elit";

$posicion = strpos($texto, $buscar);
echo $texto;
echo "<br><br>";
echo "Posicion de elit: ".$posicion;
?>
<h3>Convertir palabras a mayusculas y minusculas</h3>
<pre><code>//todo el texto en mayusculas
echo strtoupper($texto);

//Todo el texto en minusculas
echo strtolower($texto);
</code></pre>
<?php
//Probar codigo
echo strtoupper($texto);
echo "<br>";
echo strtolower($texto);
?>