<h2>Ciclos</h2>
<hr>
<?php
$Nombre = "Santiago Gonzalez";
$texto = "Nombre";
echo $texto . ": " . $Nombre . "<br>";
$Edad = "19";
echo "Edad: " . $Edad;
echo "<br>";

?>
<?php
$num = 1;
while (true) {
    $resultado = $num % 2;

    if ($resultado == 1) {
        $num++;
        continue;
    }

    if ($num > 10) {
        break;
    }

    echo "Pares: " . $num;
    echo "<br>";
    $num++;
}


?>