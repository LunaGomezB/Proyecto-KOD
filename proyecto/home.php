<?php include('views\header.php'); ?>
<header class="masthead text-white ">
    <div class="overlay"></div>
    <div class="contenedor">
        <video class="vidio" src="public/img/teclado.mp4" autoplay loop muted></video>
        <img src="./img/minimalizm-gradient-background.jpg" alt="" class="overlay-01">
      <div class="row">
            <div class="col l7 section " id="juridika">
                    <h1 class="title-01">Aprende a programar<br> de forma virtual  </h1>
                  <p class="flow-text section" style="color:white">Ve un paso adelante, Construye y mejora a tu ritmo, sin horarios, 100% online</p>
                  <div class="section">
                        <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Encuentra cursos, certificaciones y prfesores" aria-label="Search" style="border-radius: 2em; padding: 2rem; width: 50%;">
                                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" style="border: none;"><i class="fas fa-search" style="color: #fff;"></i></button>
                 </form>
        </div>
      </div>
    </div>
  </header>
  <section>
    <img src="public/img/bg-computer.png" alt="" style="width: 100%;">
</section>
  <section>
        <div class="container">

          <div class="row">
            <div class="col l12">
              <div>
                <h2 class="center-align  text-center pt-5" id="titulo-001">No esperes mas para ser el mejor Desarrollador</h2>
                <p class="text-center" style="color: #fff; margin: 20px;">Los mejores cursos, con los mejores desarrolladores las 24 horas!</p>
              </div>
            </div>
          </div>
        </div>
      </section>




      <section class="fondo-01">
      <div class="container pt-5 "">
              <div class="row">
                <div class=" col-md-6">
                <?php
                include("prueba.php");
                $con=conectar();
               $sql = "SELECT * FROM cursos";
               $resultado=$con->query($sql);;
               while ($fila = mysqli_fetch_array($resultado)) { ?>
                        <div class="card-img" ="width: 27rem; ">
                                <img src="files/<?php echo $fila['imagen']; ?>" class="card-img-top" alt="..." id="border">
                                <div class="card-body">
                                <h5 class="card-title" id="sub-01"><?php echo $fila['titulo']; ?></h5>
                                  <p class="card-text" id="nombre-01">Por: Carlos Nieto</p>
                                  <p class="card-text" id="precio-01">$<?php echo $fila['precios']; ?></p>
                                  <a href="#" class="btn btn-outline-primary" id="cuadro-03"><i class="far fa-heart"></i></a>
                                  <a href="curso-html.php" class="btn btn-outline-primary" id="cuadro-02">comprar ya</a>
                                </div>
                              </div>
                    </div>
                    <?php } ?>
                 </div>
              </div>
      </section>

          
<?php include('views\footer.php');?>   