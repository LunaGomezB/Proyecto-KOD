<?php 
include('db.php');
 if(isset($_GET['id'])){
     $id = $_GET['id'];
     $query = "DELETE FROM cursos WHERE id= '$id'";
     $resultado = mysqli_query($conexion, $query);
     if (!$resultado){
         die("No se pudo eliminar el curso");
     }
     $_SESSION['mensaje'] = "El curso fue eliminado exitosamente";

     header ("Location: index.php");
 }


?>