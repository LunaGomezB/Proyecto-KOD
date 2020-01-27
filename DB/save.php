<?php
include("db.php");

 if (isset($_POST['guardar'])){
     $titulo = $_POST['titulo'];
     $descripcion = $_POST['descripcion'];
     $precios= $_POST['precios'];
     $imagen = $_FILES['imagen']['name'];
     
     $query = "INSERT INTO cursos(titulo, descripcion,imagen, precios) VALUES ('$titulo', '$descripcion', '$imagen', '$precios')";
     $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die ("Query Failed");
    } 
    $_SESSION['mensaje'];
    header("location: index.php");
    }
?>