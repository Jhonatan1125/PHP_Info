<h2>Funciones</h2>
<hr>
<p>Son Instrucciones guardadas en un bloque que al ser llamadas estas se ejecutan</p>
<pre><code>//Creamos una funcion con nombre a la accion que realizara
function Sumanumeros(){
    $num1 = 1;
    $num2 = 3;
    echo $num1 + $num2;
};

//Llamar funcion
Sumanumeros();

function Numerosimpares($max)
{
    for ($i=0; $i < $max; $i++) { 
        if ($i % 2 > 0) {
            echo "Numeros: $i";
        }
    }
}

Numerosimpares(20);

</code></pre>
<?php
//Probar codigo

?>

