<?php
	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
	
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("El correo ya existe en <KOD>, verifique los datos");</script> ';
			    
			}else{
				
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$pass','$mail','2')");
				echo ' <script language="javascript">alert("Registro exitoso.  Haces parte de <KOD>");</script> ';
			}
			
		}else{
			echo 'Las contraseñas no coinciden';
		}

		
/*caso 1 existe correo, alert
caso 2 nuevo ingreso ok, alert, index2
caso 3 error en contraseñas*/
	
?>

