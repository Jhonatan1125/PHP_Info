<?php
require_once 'persona.php';
require_once 'usuario.php';
require_once 'admin.php';
?>

<h2>Porgramacion Orientada a objetos en PHP</h2>
<hr>
<p><strong>-Clases-</strong> Se crean diferentes clases y heredaremos sus propiedades, por ultimo almacenamos un valor</p>
<pre><code>&lt;?php
require_once 'persona.php';
require_once 'usuario.php';
require_once 'admin.php';
?&gt;
/*
<strong>CLASE PERSONA</strong>//etiqueta html
class Persona{
    public function Saludo(){
        return "Hola $this->name";
    }
}

<strong>CLASE USUARIO</strong> 
class Usuario{
    public $tipo;
}

<strong>CLASE ADMIN</strong>
class Admin extends Persona{
    public $name = "Admin";
}
*/
$user = new Usuario;
$user->tipo = new Admin;
echo $user->tipo->Saludo();</code></pre>
<?php 
//Probar codigo

?>
