<?php
include("../prueba.php");
$con=conectar();

 if (isset($_GET['id'])){
     $id = $_GET['id'];
     $query = "SELECT * FROM cursos WHERE id = '$id'";
     $resultado= mysqli_query($con, $query);
     if (mysqli_num_rows($resultado) == 1){
         $fila = mysqli_fetch_array($resultado);
         $titulo = $fila['titulo'];
         $descripcion = $fila['descripcion'];
         $precio = $fila['precios'];
         $imagen = $fila['imagen'];
     }
 }
 if (isset($_POST['actualizar'])){
     $id = $_GET['id'];
     $titulo =$_POST['titulo'];
     $descripcion = $_POST['descripcion'];
     $precios= $_POST['precios'];
     $imagen = $_POST['imagen'];

    $query = "UPDATE cursos set titulo = '$titulo', descripcion = '$descripcion', imagen = '$imagen', precios='$precios' WHERE id='$id'";
    mysqli_query ($con, $query);
    $_SESSION['mensaje']= 'El curso ha sido actualizado';
    header('location: index.php');

 }
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Editar Cursos</title>
 </head>
 <body>
     <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST" enctype="multipart/for-data">
        <input type="text" name="titulo" value="<?php echo $titulo ?>" placeholder="Nombre Curso"> <br>
        <textarea name="descripcion" placeholder="Descripcion del curso"><?php echo $descripcion ?></textarea> <br>
        <input type="number" name="precios" placeholder="Precio curso" value="<?php echo $precios ?>"  > <br>
        <input type="file" accept="image/*" name="imagen" placeholder="imagen" > <br>
        <button name="actualizar">
        Actualizar
        </button>
     </form>
 </body>
 </html>