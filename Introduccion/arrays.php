<h2>Arrays</h2>
<hr>
<?php
//definicion de arrays
$numeros = [1,2,3,4];
echo "Mas informacion: ";
var_dump($numeros);

//Mas legible
echo "<br><br>";
echo "Menos informacion: ";
print_r($numeros);
?>
<h3>Contar arrays</h3>
<?php
echo "Cantidad de elementos: ". count($numeros);
?>
<h3>Array asociativo</h3>
<?php
//array asociativo
$meses = [1 => "Enero",
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
    echo $key . " = ". $value;
    echo "<br>";
}
?>
<h3>array anidado</h3>
<?php
//Array anidado
$arraya = [
    [1,2,3,],
    [3,1,3,1]
];

var_dump($arraya);
?>