<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}

$id=$_SESSION['id'];

?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>KOD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" >
<?php

include("include/menuUsuario.php");

?>

<!-- ======================================================================================================================== -->
<div class="row">
	
<br>
		
	<div class="span12">
	<br>
	<p>En esta sección podrás modificar tus datos y/o cambiar la clave de tu cuenta</p>
	<br>
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Editar Perfil</h4>
		<br>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM login WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    }
		?>

		<form action="ejecutaactualizar.php" method="post">
				Código Usuario<br><input style="width:100%; height:3rem; padding-left: 10px;" type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br><br>
				Usuario<br> <input style="width:100%; height:3rem; padding-left: 10px;" type="text" name="user" value="<?php echo $user?>"><br><br>
				Contraseña<br> <input style="width:100%; height:3rem; padding-left: 10px;" type="text" name="pass" value="<?php echo $pass?>"><br><br>
				Correo usuario<br> <input style="width:100%; height:3rem; padding-left: 10px;" type="text" name="email" value="<?php echo $email?>"><br><br>
				
				<br>
				<input style="width:100%; height:3rem;" type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		</div>
</div>

	</div>
</div>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


