<!DOCTYPE html>
<?php 
include("DB/db.php");

?>
	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
  }
  $id=$_SESSION['id'];
	?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
    <title>Perfil Usuarios </title>
    <link rel="stylesheet" href="estilosPerfilU.css">
</head>
<body data-offset="40" >


<!-- Navbar
    ================================================== -->
<?php
include("include/menuUsuario.php");
?>
<!-- ======================================================================================================================== -->


<p class="h1 p-5"> Hola, <strong><?php echo $_SESSION['user'];?></strong>. ¡Te damos la bienvenida!</p>

<h1 class="text-center " >CURSOS KOD</h1>


        <table  style="margin-top:6rem; box-shadow:5px 5px 10px black;">
          <thead>
          <tr>
          <th class="px-3 py-3 text-center" style="border:1px solid black;">Cursos</th>
          <th class="px-3 py-3" style="border:1px solid black;">Imagen</th>
          </tr>
          </thead>
          <tbody>
               <?php
               $query = "SELECT titulo, imagen FROM estudiante INNER JOIN cursos ON estudiante.curso = cursos.id WHERE usuario='$id'";
               $resultados_cursos = mysqli_query($conexion, $query);

               while ($fila = mysqli_fetch_array($resultados_cursos)) { ?>
                    <tr>
                        <td class="px-3 py-3" style="border:1px solid black;"><?php echo $fila['titulo']; ?></td>
                        <td style="border:1px solid black;"><img width="100px" src="proyecto/editar/files/<?php echo $fila['imagen']; ?>"/></td>
                    </tr>
               <?php } ?>
          </tbody>
        </table>



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
  </body>
</html>