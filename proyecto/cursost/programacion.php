<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/LOGO-30X30.svg" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
    <title>CURSOS | KOD</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light  bg-primary">
            <div class="container">
                <a class="navbar-brand text-white" href="../home.php"><img class="logo1" src="../../public/img/KOD-LOGO-FA.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="../curso html/temariohtml.html">HTML<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="../curso css/temariocss.html">CSS</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="../curso Javascript/temariojs.html">Javascript<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Fullstack
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a  class="dropdown-item" href="../curso Python/temarioopython.html">Cursos de Python</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../curso mysql/temariomysql.html">Curso de MySQL</a>
</div>
                    </li>
                  </ul>
                  <a class="nav-link text-white" href="../../signin.php">Iniciar Sesión<span class="sr-only">(current)</span></a>
                  <a class="nav-link text-white" href="../../signup.php">Regístrate<span class="sr-only">(current)</span></a>
                </div>
            </div>
              </nav>
              <header class="masthead text-white " id="bg-01">
    <div class="overlay"></div>
    <div class="contenedor" style="height: 800px;">
      <div class="row">
            <div class="col l7 section " id="juridika" >
                    <h1 class="title-01">Estudia</h1>
                    <h1 class="title-03">    Comodamente....</h1>
                  <div class="section">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br> Sequi error nemo voluptatem blanditiis dolorem libero dolor, <br> id dolorum ipsum est. Veritatis mollitia perspiciatis illum <br> nemo suscipit deserunt, sint reiciendis porro.</p>
        </div>
      </div>
    </div>
  </header>
  <section>
</section>
  <section>
        <div class="container">

          <div class="row">
            <div class="col l12">
              <div>
                <h2 class="center-align  text-center pt-5" id="titulo-001" style="color: #0068A3; font-weight: 300;" >Front-<strong>End</strong></h2>
                <p class="text-center" style="color: #0068A3; margin: 20px;">Los mejores cursos, con los mejores desarrolladores las 24 horas!</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="fondo-02">
          <div class="container pt-5 "">
              <div class="row">
              <?php
                include("../prueba.php");
                $con=conectar();
               $sql = "SELECT * FROM cursos";
               $resultado=$con->query($sql);;
               while ($fila = mysqli_fetch_array($resultado)) { ?>
                <div class=" col-md-4">
                  <div class="card" id="card">
                          <img src="files/<?php echo $fila['imagen']; ?>"class="card-img-top" alt="..." id="border">
                          <div class="card-body">
                            <h5 class="card-title" id="sub-002"><?php echo $fila['titulo']; ?></h5>
                            <p class="card-text"  id="nombre-002">Por: Carlos Nieto</p>
                            <p class="card-text" id="precio-002">$<?php echo $fila['precios']; ?></p>
                            <a href="#" class="btn btn-outline-primary" id="cuadro-004"><i class="far fa-heart"></i></a>
                            <a href="#" class="btn btn-outline-primary" <form action="videos-html.php" method="POST">
              <script src="https://checkout.stripe.com/checkout.js"
                class="stripe-button"
                data-key="pk_test_kkVKlC7CeU0IIMTHeibiLiU100W7cQfX36"
                data-amaount="30000"
                data-name="curso_html"
                data-description="curso de html"
                data-locale="auto"
                data-currency="gbp">
                data-image=""
              src"file:///C:/xampp/htdocs/clasePhpBictia/adminLogin/proyecto/cursost/usuarios/cursoJS.html" )?>
              </script></a>
                          </div>
                        </div>
                        </form>
              </div>
               <?php } ?>
                    
                   
               </div>

               
            </div>
    </section>

      
    <script src="https://kit.fontawesome.com/b4d529fd65.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>







