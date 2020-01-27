<?php
include("prueba.php");
$con=conectar();
echo "Conexion Realizada correctamente";

 if(isset($_POST['guardar'])){
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $contra=$_POST['contraseña'];
    $rcontra=$_POST['rcontraseña'];
    //print_r($conexion);
    //die();
 
    $sql ="INSERT INTO usuarios(id,nombre, email, contrasena) VALUES (null,'$nombre', '$email', '$contra')";
    $resultado=$con->query($sql);
    header('location:perfilUsuarios.php');
 }

?>