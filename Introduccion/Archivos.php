<h3>Archivos</h3>
<p>PHP nos permite modificar archivos o documentos</p>
<pre><code>//Abrir archivo
$archivo = fopen("archivo.txt","r");

//Leer contenido (lee una linea a la vez)
$contenido = fgets($archivo);

//Escribir $contenido
fwrite($archivo, "Nuevo texto");

//Cerrar coneido 
fclose($archivo);
</code></pre>
<?php
//Probar codigo

?>

<p>Podemos tambien ejecutar otros comandos para realizar diferentes acciones con los documentos</p>
<pre><code>//Copiar fichero
copy('fichero.txt','fichero_copy.txt') or die ("error al copiar");

//Renombrar archivo
raname("fichero.txt","Nuevonombre.txt");

//Eliminar archivo
unlink("fichero.txt") or die ("error al borrar");

//Comprobar si el archivo existe
file_exists("fichero.txt");
</code></pre>
<?php
//Probar codigo

?>

<p>Modificaciones con carpetas</p>
<pre><code>//crear carpeta
mkdir("new_carpeta",0777) or die ("No se pudo crear la carpeta");

//Comprobar que la carpeta existe
is_dir(new_carpeta);

//eliminar carpeta
rmdir(new_carpeta);
</code></pre>
<?php
//Probar codigo
//Listar los archivos en un directorio
$ruta = 'Introduccion';
$resultado = scandir($ruta);
foreach ($resultado as $key) {
    if (is_file($ruta."/".$key)) {
        echo $key ."<br>";
    }
    
}
?>