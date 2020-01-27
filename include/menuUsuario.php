<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
    <title>

    </title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light  bg-primary">
            <div class="container">
                
                <a class="navbar-brand text-white" href="index2.php"><img src="public/img/KOD-LOGO-tra.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link text-white">Cursos<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white">HTML</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white">CSS<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white">Javascript<span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link disabled text-white" tabindex="-1" aria-disabled="true">Blog</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white" >Cursos<span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                  
                 

                  </div>
                  
    <a  class="nav-item text-white"style="padding-right: 15px; text-transform:capitalize;" href="actualizarPerfil.php"><strong><?php echo $_SESSION['user'];?></strong> </a>
    <a  class="nav-item text-white"style="padding-right: 15px; text-transform:capitalize;" href="index2.php"><strong>Mis Cursos</strong> </a>
		<a  class="nav-item text-white" href="proyecto/cursost/programacion.php"><strong>Cerrar Cesión</strong> </a>		 
	
                       
                </div>
            </div>
              </nav>


			 
	
		