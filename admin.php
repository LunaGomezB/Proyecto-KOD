<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>



	<header class="header">
		<?php
			include("include\menu.php");
		?>
	</header>

<div class="row pt-5">
			
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2 class="tituloa-01"> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<h4 class="tituloa-0 pb-5">Tabla de Usuarios</h4>
		
			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM login");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='estudiantes-01'>";
						echo "<td class='tabla-01'>Id</td>";
						echo "<td border='1px solid #000000'; background='#4f5B92';>Usaurio</td>";
						echo "<td>Password</td>";
						echo "<td>Correo</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td border='1px solid black'; background='#0068ae'; height='5rem';>$arreglo[0]</td>";
				    	echo "<td border='1px solid #000000'; background='#4f5B92'>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
						echo "<td>$arreglo[3]</td>";

				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/editar.png' class='img-rounded'width='50px'></a></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='admin.php'</script>";
					}

			?>
			
		
		
		</div>	
		

			
			
				  
			  			  
			  
		
		
		<div class="span8">

</div>

	</div>
</div>

</div><!-- /container -->
<<footer class="bg-white">
<div class="contenedorFooter " >
    <div class="row p-5">
        <div class="col-lg-3 ">
            <span class="small ">COMUNIDAD</span>
            
                <li class="mt-3" style="list-style: none;">Blog</li>
                <li style="list-style: none;">Testimonios</li>
                <li style="list-style: none;">Recursos</li>
            
        </div>

        <div class="col-lg-3 " >
            <span class="small">CATEGORIA</span>
                <li class="mt-4" style="list-style: none;">Cursos Front-End</li>
                <li style="list-style: none;">Cursos Back-End</li>
                <li style="list-style: none;">Cursos Full-Stack</li>
            
        </div>

        <div class="col-lg-4   text-aling-left text-white" >
            <span class="small" >SOFTWARE</span>
                <li class="mt-4" style="list-style: none;">Cursos de Visual Studio</li>
                <li style="list-style: none;">Cursos de MySQL</li>
                <li style="list-style: none;">Cursos ATOM</li>
            
        </div>



        <div class="col-sm-12 row " style="margin-top: 25vh;" >
            <div class="col-sm-4 ">
                <span> 
                    <i class="far fa-envelope">ayuda@Kod.com</i>
                </span>
            </div>
            <div class="col-sm-4 ">
                <a href=""> <span style="color: white;"><i class="fab fa-linkedin-in"></i></span></a>
                <a href=""> <span style="color: white;"><i class="fab fa-youtube"></i></span> </a>
                <a href=""> <span style="color: white;"><i class="fab fa-twitter-square"></i></span> </a>
                <a href=""> <span style="color: white;"><i class="fab fa-facebook"></i></span> </a>
                <a href=""> <span style="color: white;"><i class="fab fa-instagram"></i></span> </a>

                
            </div>
            <div class="col-sm-4 " style="display: flex;">
                <img style="width: 112px; height: 34px;" src="public/img/LOGO.png" alt="">
                <div class=" btn btn-outline-light">
                    <span class="small"> español: COL <span><img style="width: 10%;" src="public/img/bandera.png" alt=""></span></span>
                </div>
            </div>
        </div>
        
    </div>
    <hr style="background: white;">
    <span class="small text-dark container"> Copyright ©  KOD 2020 - todos los derechos reservados</span>





</div>
</footer>
<script src="https://kit.fontawesome.com/b4d529fd65.js" crossorigin="anonymous"></script>
    

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>
  </body>
</html>