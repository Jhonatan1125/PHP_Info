<?php

echo "<br>";
function Sumanumeros(){
    $num1 = 1;
    $num2 = 3;
    echo $num1 + $num2;
};

//Llamar funcion
Sumanumeros();

echo "<br>";
function Numerosimpares($max)
{
    for ($i=0; $i < $max; $i++) { 
        if ($i % 2 > 0) {
            echo "Numeros: $i";
            echo "<br>";
        }
    }
}

Numerosimpares(20);
?>