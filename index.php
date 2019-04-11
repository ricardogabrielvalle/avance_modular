<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include 'navbar.php';//barra de navegación y bootstrap?>
        <!-- Carrusel -->
        <div id="carouselExampleIndicators" class="carousel slide w-50" style="margin:auto;" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/1.jpg" class="d-block w-100" alt="imagen">
            </div>
            <div class="carousel-item">
              <img src="img/2.jpg" class="d-block w-100" alt="imagen2">
            </div>
            <div class="carousel-item">
              <img src="img/3.jpg" class="d-block w-100" alt="imagen3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Información con fines demostrativos -->
        <h1 align=center>Acerca de nosotros...</h1>
                <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim tincidunt dapibus. Maecenas posuere metus in nisi sodales, ac posuere sem volutpat. Fusce ac dictum ante. Cras a sodales ipsum, nec elementum metus. Aliquam erat volutpat. Duis enim justo, cursus ac dolor lobortis, viverra commodo orci. Nam ut dignissim urna, eget tristique nibh.
                </p>
    </body>
</html>
