<?php include('connect_db.php'); ?>

<?php include('views/header.php');?>

<div class="Logo pt-5" style="position: absolute;"><img src="public/KOD-negro.png" alt="" style="width: 40%;"> </div>


<div class="contenedorRegistro pt-5 text-center">


    <h1> Registrate con Nosotros</h1>
    <form class="mt-5 " action="signup.php" method="POST" style="width: 100%;">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-label="name" aria-describedby="basic-addon1" style="width: 100%; height: 50px;">
        </div>

        <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Correo electrónico" aria-label="Username" aria-describedby="basic-addon1" style="width: 100%; height: 50px;" required>
        </div>

        <div class="input-group mb-3">
            <input type="password" class="form-control" name="contraseña"placeholder="Contraseña" aria-label="password" aria-describedby="basic-addon1" style="width: 100%; height: 50px;">
        </div>

        <div class="input-group mb-3">
            <input type="password" class="form-control" name="rcontraseña" placeholder="Repetir Contraseña" aria-label="password" aria-describedby="basic-addon1" style="width: 100%; height: 50px;" required>
        </div> 
  

   
        <button class="btn-block text-white mb-5" name="submit" style="height: 50px; background: #4e21ed;" type="submit"> Registrarse </button>
    </form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("backend/signup.php");
		}
	?>
 
<?php include('views/footer.php');?>   
