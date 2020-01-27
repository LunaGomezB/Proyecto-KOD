<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>KOD</title>
</head>
<body>

<!-- formulario registro -->
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>

<?php include('views/header.php');?>

<div class="Logo pt-5" style="position: absolute;"><img src="public/KOD-negro.png" alt="" style="width: 40%;"> </div>


<div class="contenedorRegistro pt-5 text-center">


    <h1> Registrate con Nosotros</h1>
    <form class="mt-5 " method="post"  style="width: 100%;" action="home.php">
    <fieldset>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="realname" placeholder="Nombre" aria-label="name" aria-describedby="basic-addon1" style="width: 100%; height: 50px;">
        </div>

        <div class="input-group mb-3">
            <input type="email" class="form-control" name="nick" required placeholder="Correo electrónico" aria-label="Username" aria-describedby="basic-addon1" style="width: 100%; height: 50px;">
        </div>

        <div class="input-group mb-3">
            <input type="password" class="form-control" name="pass" placeholder="Contraseña" aria-label="password" aria-describedby="basic-addon1" style="width: 100%; height: 50px;">
        </div>

        <div class="input-group mb-3">
            <input type="password" class="form-control" name="rpass"  required placeholder="Repetir Contraseña" aria-label="password" aria-describedby="basic-addon1" style="width: 100%; height: 50px;">
        </div> 
   
        <button class="btn-block text-white mb-5" name="submit" style="height: 50px; background: #4e21ed;" type="submit"> Registrarse </button>
        </fieldset>
    </form>
</div>
 
<?php include('views/footer.php');?>   


	
</body>
</html>
