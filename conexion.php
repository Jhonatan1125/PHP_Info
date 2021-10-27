<?php
//Datos para conexion
$host = "localhost";
$usuario = "root";
$pass = "";
$BaseDatos = "contactos";

//Configuracion

$BDD = 'mysql:host=' . $host . ';dbname=' . $BaseDatos;

//Crear instacia PDO
try {
    $PDO = new PDO($BDD, $usuario, $pass);

} catch (PDOException $e) {
   echo $e->getMessage();

}
//Query normal
/*$query = $PDO->query('SELECT * FROM personas');
while ($fila = $query->fetch(PDO::FETCH_OBJ)) {
    echo $fila->nombre;
}*/

//Query posicional
/*$query2 = "SELECT * FROM personas WHERE nombre = ?";
$nombre1 = 'juan';
$stmt = $PDO->prepare($query2);
$stmt->execute([$nombre1]);
$consulta = $stmt->fetch();
var_dump($consulta);*/

//datos a insertar
/*
$nombre = 'Esteban';
$apellido = 'Caicedo';
$telefono = '5345341';
$email = 'Este@gmail.com';

$Insercion = 'INSERT INTO personas(nombre,apellido,telefono,email)
values(:nombre,:apellido,:telefono,:email)';
$stmt = $PDO->prepare($Insercion);
//$stmt->execute(['nombre'=>$nombre,'apellido'=>$apellido,'telefono'=>$telefono,'email'=>$email]);
$stmt->bindParam('nombre',$nombre, PDO::PARAM_STR);
$stmt->bindParam('apellido',$apellido, PDO::PARAM_STR);
$stmt->bindParam('telefono',$telefono, PDO::PARAM_STR);
$stmt->bindParam('email',$email, PDO::PARAM_STR);

$stmt->execute();
*/

//Actualizacion de datos
/*
$nombre = 'Esteban2';
$apellido = 'Caicedo2';
$telefono = '53453412';
$email = 'Este@gmail.com2';
$id = 2;

$Insercion = 'UPDATE personas SET nombre=:nombre,apellido=:apellido,telefono=:telefono,email=:email WHERE id=:id';
$stmt = $PDO->prepare($Insercion);
$stmt->bindParam('nombre',$nombre, PDO::PARAM_STR);
$stmt->bindParam('apellido',$apellido, PDO::PARAM_STR);
$stmt->bindParam('telefono',$telefono, PDO::PARAM_STR);
$stmt->bindParam('email',$email, PDO::PARAM_STR);
$stmt->bindParam('id',$id, PDO::PARAM_INT);

$stmt->execute();
echo 'Actualizado correctamente';
*/
//Eliminacion de datos
/*
$id = 3;
$Insercion = 'DELETE FROM personas WHERE id=:id';
$stmt = $PDO->prepare($Insercion);
$stmt->bindParam('id',$id, PDO::PARAM_INT);
$stmt->execute();
echo 'Borrado correctamente';
*/
$Buscar = "%Es%";
$Insercion = 'SELECT * FROM personas WHERE nombre LIKE :nombre';
$stmt = $PDO->prepare($Insercion);
$stmt->bindParam(':nombre',$Buscar, PDO::PARAM_STR);
$stmt->execute();
$usu = $stmt->fetchAll();
var_dump($usu);