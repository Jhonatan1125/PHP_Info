<?php
    //try catch
    //Ejemplo 1
    function dividir($x,$y) :int{
        if ($y <= 0) {
            throw new Exception("Error, a ocurrido una division por cero");        
        }

        $resultado = $x / $y;
        return $resultado;

    }

    try {
        echo dividir(10,0);
    } catch (Exception $e) {
        echo "Captura excepcion:".$e->getMessage();
        echo "<br>";
    }