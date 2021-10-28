<h2>Definir variables</h2>
<hr>
<p></p>
<pre><code>define('CUOTA', 2000);
$ValorCuota = CUOTA;
echo "El valor de cuota: $ValorCuota";</code></pre>
<?php
/*No necesitan utilizar el $ y se asignan una unica vez */
//Definir una constante estatica
define('CUOTA', 2000);
$ValorCuota = CUOTA;
echo "El valor de cuota: $ValorCuota";
//Buenas practicas con costantes
//1.TODO EN MAYUSCULA 
//2.No Utilizar doble guion   
//
define('NOMBRE', 'Jhonatan Gonzalez');
?>
<h2>Constantes Magica</h2>
<hr>
<ol>
    <li><?php echo "Numero de linea: " . __LINE__; ?></li>
    <li><?php echo "Directorio actual: " . __DIR__; ?></li>
    <li><?php echo "Nombre del archivo actual: " . __FILE__; ?></li>
    <li><?php echo "Para funciones anonimas: " . __FUNCTION__; ?></li>
</ol>
<a href='https://www.php.net/manual/en/language.constants.magic.php'>Consultar constantes magicas</a>
<h2>Expresiones y operadores</h2>
<hr>
<?php
//Operador condicional
$Permiso = (true) ? "Entra" : "No entra";
echo "Operador condicional: " . $Permiso;
//Operador logico and or
$Permiso = true;
$autentificado = false;
echo "<br>Operador logico:   ";
echo ($Permiso && $autentificado) ? "Bienvenido" : "Registrese";
//Operador de union
echo "<br>";
echo "Operador Union:   ";
$nombrecompleto = "Juan";
$nombrecompleto .= " Andres";
$nombrecompleto .= " Escobar";
echo $nombrecompleto;
//saber parametros del valores en el sistema
?>
<ol>
    <li><?php echo "Tamaño de un entero " . PHP_INT_SIZE; ?></li>
    <li><?php echo "Minimo de un entero " . PHP_INT_MIN; ?></li>
    <li><?php echo "Maximo de un entero " . PHP_INT_MAX; ?></li>
</ol>
<?php
//Contar caracteres de un string
$Caracter = "Jhonatan Santiago Gonzalez Martinez";
echo $Caracter;
echo "<br>Numero de caracteres de string: " . strlen($Caracter);
echo "<br>Con unset() se borra una variable del programa y de la memoria";
?>
<h2>Namespace</h2>
<hr>
<?php include "ConstNamesSpace.php";
echo constantes1\NOMBRE_ARCHIVO;
?>
<h2>IF - ELSE</h2>
<hr>
<p>= = = Sirve para que en la comparacion tambien pida que sea el mismo tipo de dato</p>
<h2>Incluir Archivos</h2>
<hr>
<p>Include sirve para imprimir archivos asi existan errores en otra lineas
    <br> require no imprime si hay errores
    <br> _once sirve para no repetir el archivo mas de dos veces
</p>
<?php include 'Ciclos.php'; ?>
