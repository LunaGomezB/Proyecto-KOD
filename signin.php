<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>


<?php include('views/header.php');?>

<div class="Logo" style="position: absolute;"><img src="public/img/KOD-negro.png" alt="" style="width: 40%;"> </div>

<div class="contenedor-principal  text-center px-5 py-5 ">

    <div class="titulo " style="width: 100%;">
        <h1 style="font-size: 50px;">Bienvenido de Vuelta</h1>
        <span class="h3">Inician sesión como usuario < KOD ></span>
    </div>

    <div class="botonFacebook  text-white  mt-5 " style="width: 100%; height: 50px; "  >
        <a href=""style="font-size20px"> <img src="public/img/logoFacebook.png" style="width: 20%;" alt=""> <span class="text-white" style="vertical-align: middle;"> Continua con Facebook </span> </a>
    </div>
    
    

    <div class="botonGoogle   mt-3 mb-4 " style="width: 100%; height: 50px;">
        <a href=""style="font-size20px"> <img src="public/img/google.png" style="width: 7%;" alt=""> <span  style="vertical-align: middle;"> Continua con Facebook </span> </a>

    </div>

    <span class="h3 ">O continúa con</span>

    <form  action="validar.php" method="post" class="mt-4" action="" style="width: 100%;">
        <div class="input-group mb-3">
          <input type="email" name="mail" class="form-control" placeholder="Usuario o correo electrónico" aria-label="Username" aria-describedby="basic-addon1" style="width: 100%; height: 50px;">
        </div>
        <div class="input-group mb-3">
            <input type="password" name="pass" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" style="width: 100%; height: 50px;">
        </div>

        <button class="btn-block text-white" style="height: 50px; background: #4e21ed;" type="submit"> Inicia Sesión</button>
    </form>

    <span><a class="text-primary " href="">¿ Olvidaste tu contraseña ?</a> </span>

    <div class="mt-4" > <span class="h5">¿Aun no eres miembro ? <a class="text-dark" href="home.php">Registrate</a> </span> </div>
    <div class="mt-4"><span> Al registrarte acepta nuestros </span> <a class="text-dark" href="">Términos y políticas de privacidad</a> </div>
</div>




<?php include('views/footer.php');?>   