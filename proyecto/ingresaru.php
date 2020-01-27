<?php
include("prueba.php");
$con=conectar();
$usu=$_POST['usuarioe'];
$pass=$_POST['contra'];
$datos="";

	$sql="SELECT * FROM usuarios WHERE email='$usu' AND contraseña='$pass'";
	$result=$con->query($sql);
	while ($res=mysqli_fetch_assoc($result))
	{
        $datos=1;
        
    }
    if ($datos==1)
        {
            header('location: home.php');
    
        }else
        {
         header('location: signup.php');
        }
?>