<?php 
function conectar(){
	$con=mysqli_connect("localhost","root","","administracion") or die("error de conexion");
	//mysqli_select_db($base,$con);
	return $con;
}
?>