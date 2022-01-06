<h2>Arrays</h2>
<hr>
<p>Un array tiene la funcion de almacenar informacion con un orden para luego ser llamado</p>
<pre><code>//Se define la array
$numeros = [1,2,3,4];
//Mayor informacion de la array
echo "Mas informacion: ".var_dump($numeros);


//Menor informacion de la array
echo "Menos informacion: ".print_r($numeros);

echo "Cantidad de elementos: ". count($numeros);
</code></pre>
<?php
//Probar codigo


?>
<h3>Array asociativo</h3>
<p>Sirve para definir el valor o nombre a la ubicacion</p>
<pre><code>$meses = [1 => "Enero",
    2 => "Febrero",
    3 => "Marzo",
    4 => "Abril",
    5 => "Mayo",
    6 => "Junio",
    7 => "Julio",
    8 => "Agosto",
    9 => "Septiembre",
    10 => "Octubre",
    11 => "Noviembre",
    12 => "Diciembre"
];
</code></pre>
<?php
//Sirve para colocarle nosotros el valor de la ubicacion o nombre
$meses = [
    1 => "Enero",
    2 => "Febrero",
    3 => "Marzo",
    4 => "Abril",
    5 => "Mayo",
    6 => "Junio",
    7 => "Julio",
    8 => "Agosto",
    9 => "Septiembre",
    10 => "Octubre",
    11 => "Noviembre",
    12 => "Diciembre"
];

foreach ($meses as $key => $value) {
    echo $key . " = " . $value;
    echo "<br>";
}
?>
<h3>array anidado</h3>
<p>Podemos colocar arrays dentro de otros arrays</p>
<pre><code>$arraya = [
    [1, 2, 3,],
    [3, 1, 3, 1]
];
</code></pre>
<?php
//Array anidado
$arraya = [
    [1, 2, 3,],
    [3, 1, 3, 1]
];

var_dump($arraya);
?>