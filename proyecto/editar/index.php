<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos kod</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">

</head>
<body>
<header class="header">
		<?php
  include("menu.php");
		?>
</header>

 <div class="contenedor-subirCursos">
        <div class="row ">

            <!-- BARRA VERTICAL IZQUIERDA -->
            <div class="col-md-3 " style="min-height:100vh;background:#0068A3;">
                <div class="contenedor-formulario " style="width:90%; margin:auto;">
                    <form action="save.php" method="POST" enctype="multipart/form-data" style="margin-top:8rem;">
                    <input class="mt-5" type="text" name="titulo" placeholder="Título" style="width:100%; height:7vh;"> <br>
                    <input class="mt-3" type="number" name="precios" placeholder="Precio" style="width:100%; height:7vh;"> <br>
                    <textarea class="mt-3" name="descripcion" rows="2" placeholder="Descripción del curso"style="width:100%; height:10vh;"></textarea> <br>
                    <input class="mt-3 btn-outline-white" type="file" accept="image/*" name="imagen" placeholder="imagen" style="width:100%; height:7vh; background:; "> <br>
                    <input class="mt-1 btn-outline-white text-white" type="submit" name="guardar" value="Guardar Curso" style="width:100%; height:7vh; background:#0068A3;">  <br>
                    <?php if(isset($_SESSION['mensaje'])){?>
                    <?= $_SESSION['mensaje'] ?>
                    <?php session_unset(); }?>
                    </form>

                </div>

            </div>
            <!-- CONTENIDO DE LA TABLA -->
            <div class="col-md-9 ">
                <div class="mt-5"  >
                    <table class="" style="width:80%; margin-top:15rem; margin-left:auto; margin-right:auto; border:1px solid black;" >
                        <thead>
                            <tr>
                            <th class="p-2" style="border:1px solid black;">Título</th>
                            <th class="p-2"  style="border:1px solid black;">Descripción</th>
                            <th class="p-2"  style="border:1px solid black;">Imagen</th>
                            <th class="p-2"  style="border:1px solid black;">Precio</th>
                            <th class="p-2"  style="border:1px solid black;">Acciones</th>
                            </tr>
                        </thead>
                    <tbody>
                    <?php
                include("../prueba.php");
                $con=conectar();
               $sql = "SELECT * FROM cursos";
               $resultado=$con->query($sql);;
               while ($fila = mysqli_fetch_array($resultado)) { ?>
                        <tr>
                        <td class="p-2"  style="border:1px solid black;"><?php echo $fila['titulo']; ?></td>
                        <td class="p-2"  style="border:1px solid black;"><?php echo $fila['descripcion']; ?></td>
                        <td class="p-2"  style="border:1px solid black;"><img width="100px" src="files/<?php echo $fila['imagen']; ?>"/></td>
                        <td class="p-2"  style="border:1px solid black;">$<?php echo number_format($fila['precios']); ?></td>
                        <td style='border:1px solid black; text-align: center;'>
                        <a href="delete.php?id=<?php echo $fila['id'] ?>"><img src='files/eliminar.png' class='img-rounded' width='30px'/></a>
                        <a href="edit.php?id=<?php echo $fila['id'] ?>"><img src='files/editar.png' class='img-rounded'width='30px'/></a>
                        </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
 </div>


























































































        <script src="https://kit.fontawesome.com/b4d529fd65.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>