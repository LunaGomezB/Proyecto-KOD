<?php include("prueba.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
    <title>Perfil Usuarios </title>
    <link rel="stylesheet" href="estilosPerfilU.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light  bg-primary">
            <div class="container">
                
                <a class="navbar-brand text-white" href="home.php"><img src="public/img/KOD-LOGO-tra.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="cursost/programacion.php">Cursos<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="curso html/temariohtml.html">HTML</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="curso css/temariocss.html">CSS<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="curso Javascript/temariojs.html">Javascript<span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                  
                  <div class="nav-item dropdown ">
                      
                      </div>
                        
                  </div>
                  <a class="nav-link text-white" href="home.php"   >
                       Bienvenido
                      </a>
                    <a class="nav-link text-white" href="home.php"   >
                       Editar perfil
                      </a>
                        
                      
                       
                </div>
            </div>
              </nav>

    <div class="contenedor">
        <div class="container-fluit bg-primary row" style="min-height: 100vh;"> 

            <!-- ESTO ES LA PARTE DEL ASIDE DE LA DERECHA -->
            
            <div class="col-sm-12 col-md-3 bg-#0068A3 text-center pb-4">
                <img class="mt-5" src="public/foto.jpg" alt="" style="border-radius: 50%; width: 100%;">
                <div class="mt-4">
                    <span class="tit-01">Bienvenido</span>
                </div> 
                <a href="editar/index.php"> <button class="btn  bg-white mt-5" style="width: 50%;height: 10vh;">Mis Cursos</button></a>         
                <a href="home.php"><button class="btn  bg-white mt-5" style="width: 50%; height: 10vh;">Salir de KOD</button></a>
            </div>

            <!-- DE AQUI PARA ABAJO ESTAN LAS FOTOS DE LOS CURSOS -->

            <div class="col-sm-12 col-md-9 bg-white" style="min-height: 100vh;">
               <a href=""><h1 style="text-align: center; margin: 1.5em; font-weight: 600;color: #0068A3">Editar Cursos</h1></a> 
                <div class="grupo1" style="display: flex;">
                    <div class="bg-secondary" style="width: 42%; border-radius: 4em;">
                        <div class="bg-white text-center" style="width: 100%; font-size: 1.5em; color: #0068A3;">Curso CSS 90%</div>
                        <img src="public/css.png" style="width: 100%;">
                    </div>
                    <div class="bg-secondary" style="width: 42%;">
                        <div class="bg-white text-center" style="width: 100%; font-size: 1.5em; color: #0068A3;">Curso HTML 100%</div>
                        <img src="public/JS.png" style="width: 100%;">
                    </div>
                </div>

                <div class="grupo2 mt-5" style="display: flex;">
                    <div class="bg-secondary" style="width: 42%;">
                        <div class="bg-white text-center" style="width: 100%; font-size: 1.5em; color: #0068A3;">Curso JS 70%</div>
                        <img src="public/html.png" style="width: 100%;">
                    </div>
                    <div class="bg-secondary" style="width: 42%;">
                        <div class="bg-white text-center" style="width: 100%; font-size: 1.5em; color: #0068A3;">Curso PHP 40%</div>
                        <img src="public/php.png" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>




    </div>
    <footer class="bg-white">
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