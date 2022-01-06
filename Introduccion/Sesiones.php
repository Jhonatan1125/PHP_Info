<h2>Sesiones</h2>
<hr>
<p>Sirve para almacenar datos por el sitio web hasta que se cierre</p>
<pre><code>//Iniciar la sesion se declara en todas las paginas en las que se necesite
session_start();

//declaracion de variable
$variableprueba = "Jhonatan";

//Sesion
$_SESSION['variable_sesion'] = "Sesion activa";

//cerrar sesion
session_destroy();
</code></pre>
<?php
//Probar codigo

?>

<h2>Cookies</h2>
<hr>
<p>Es un fichero que se almacena en el ordenador del usuario y tiene mayor duracion que la sesion</p>
<pre><code>//crear cookie
//setcookie("nombre","valor que solo puede ser texto",caducidad, ruta, dominio);
setcookie("micookie","valor de mi galleta");

//cookie con expiracion
setcookie("unaño","valor de mi galleta", time()+(60*60*24*365));

//Mostrar valor de cookie
if(isset($_COOKIE('micookie'))){
    echo '&lt;h1&gt;.$_COOKIE['micookei'].&lt;/h1&gt;';
}else{
    echo 'No existe la cookie';
}

//eliminar cookie
unset($_COOKIE['micookie']);
setcookie('micookie','',time()-100);

//Redirigir a otra pagina
header('Location: index.php')
</code></pre>
<?php
//Probar codigo

?>