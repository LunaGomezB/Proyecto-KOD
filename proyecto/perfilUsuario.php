<? include('views/header.php');?>

<div class="contenedor">
        <div class="container-fluit bg-primary row" style="min-height: 100vh;"> 

            <!-- ESTO ES LA PARTE DEL ASIDE DE LA DERECHA -->
            
            <div class="col-sm-12 col-md-3 bg-#0068A3 text-center pb-4">
                <img class="mt-5" src="public/img/Carlos.png" alt="" style="border-radius: 50%; width: 100%;">
                <div class="mt-4">
                    <span class="tit-01">Bienvenido</span>
                    <span class="h1-01">Carlos</span>
                </div> 
                <button class="btn  bg-white mt-5" style="width: 50%;height: 10vh;">Mis Cursos</button>         
                <button class="btn  bg-white mt-5" style="width: 50%; height: 10vh;">Salir de KOD</button>
            </div>

            <!-- DE AQUI PARA ABAJO ESTAN LAS FOTOS DE LOS CURSOS -->

            <div class="col-sm-12 col-md-9 bg-white" style="min-height: 100vh;">
                <h1 style="text-align: center; margin: 1.5em; font-weight: 600;color: #0068A3">Mis cursos</h1>
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


<? include('views/footer.php');?> 