<h2>Variables</h2>
<hr>
<p>Una variable comienza con $ seguido del nombre de esta</p>
<pre><code>//Las variables con texto siempre van con comillas
//El tipo de variable se asigna automaticamente
//Las variables son sensibles a mayusculas y minusculas
$nombre = "Jhonatan G";
$edad = 20;

$valor1 = 1;
$valor2 = 19;
echo $valor1 + $valor2." Resultado";
</code></pre>
<?php
//Probar codigo

?>

<h2>Variable Constante</h2>
<hr>
<p><strong>-Define-</strong> una constante con nombre determinado</p>
<pre><code>//No necesita utilizar el signo de $ y se asignan una unica vez
//No suele cambiar
define('VALOR', 2000);//Es sensible a las mayusculas y minisculas
echo VALOR;</code></pre>
<p><strong>-get_defined_constants(true)-</strong> funcion con la cuales podemos ver las variables constantes declaradas</p>
<pre><code>print_r (get_defined_constants(true));</code></pre>
<?php
//Probar codigo

?>

<h2>Constantes Magicas</h2>
<hr>
<p>Hay nueve constantes mágicas que cambian dependiendo de dónde se utilicen. Por ejemplo, el valor de __LINE__depende de la línea en la que se usa en su secuencia de comandos. Todas estas constantes "mágicas" se resuelven en tiempo de compilación, a diferencia de las constantes regulares, que se resuelven en tiempo de ejecución.</p>
<pre><code>&lt;?php echo "Directorio actual: " . __DIR__;?&gt;
&lt;?php echo "Nombre del archivo actual: " . __FILE__; ;?&gt;
</code></pre>
<ol>
    <li><?php echo "Numero de linea: " . __LINE__; ?></li>
    <li><?php echo "Directorio actual: " . __DIR__; ?></li>
    <li><?php echo "Nombre del archivo actual: " . __FILE__; ?></li>
</ol>
<a href='https://www.php.net/manual/en/language.constants.magic.php'>Consultar constantes magicas</a>


<h1>Funciones Server</h1>
<hr>
<p><strong>-$_SERVER-</strong> es una variable súper global de PHP que contiene información sobre encabezados, rutas y ubicaciones de scripts.</p>
<pre><code>&lt;?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_TIME'];
echo $_SERVER['REQUEST_TIME_FLOAT']; ?&gt;</code></pre>
<?php
//Probar codigo

?>
<?php echo $_SERVER['HTTP_HOST'] . "<br>";
echo $_SERVER['REQUEST_TIME'] . "<br>";
echo $_SERVER['REQUEST_TIME_FLOAT']; ?>
<h2>Namespace</h2>
<hr>
<?php include "ConstNamesSpace.php";
echo constantes1\NOMBRE_ARCHIVO;
?>
<h2>Incluir Archivos</h2>
<hr>
<p><Strong>-Include-</Strong> Nos permite incluir un archivo de otro. Sino lo encuentra solo genera un warning que permite continuar</p>
<pre><code>&lt;?php include Principal.php;?&gt;</code></pre>
<p><Strong>-Require-</Strong> Lo mismo que include pero mas exigente, en caso de fallo producira un error fatal, no permitira continuar con el proceso</p>
<pre><code>&lt;?php Require Principal.php;?&gt;</code></pre>
<p><Strong>-Require_once-</Strong> identico a require excepto que PHP verifica si el archivo ya ha sido incluido y si es asi, no se incluye o duplica</p>
<pre><code>&lt;?php Require_once Principal.php;?&gt;</code></pre>

