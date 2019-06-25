<!DOCTYPE html>
  <html lang="es" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Galeria</title>
      <!--Limea responsva-->
        <meta name="viewport" content="width=device-width,user-scalable=no,
        initial-scale=1,maximum-scale=1,minimum-scale=1" />
        <meta name="viewport" content="width=device-width,
         user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!-- ------------------------------------------------------------------------------------------------------------------------- -->


        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />

      <link rel="stylesheet" href="css\EstiloHome.css">
        <link rel="stylesheet" href="css\estilos0.css">

    </head>
    <body >
      <header>
       <!----------------------------------------------------------------------------------------------------
          <div class="menu_bar">
              <a href="#" class="bt-menu"><span class="glyphicon glyphicon-menu-hamburger"></span>Xilotzin</a>
          </div>
          para que no se roben el CODIGO se pondr esto alado del body
          oncontextmenu="return false" onkeydown="return false"
          ---------------------------------------------------------------------------------------------------->
          <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">

          <ul class="nav navbar-nav">
                <li ><a href="{{route('welcome')}}">Inicio</a></li>
                <li><a href="{{route('usuarios.discografia')}}">Discografia</a></li>
                <li><a href="{{route('usuarios.videos')}}">Videos</a></li>
                <li class="active"><a href="{{route('usuarios.galeria')}}">Galeria</a></li>
                <li><a href= "{{route('usuarios.noticias')}}">Noticias</a></li>
                <li><a href="{{route('usuarios.foro')}}">Foro</a></li>
                <li><a href="{{route('usuarios.informacion')}}">Informacion</a></li>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php
                      echo '<a href="" target="_blank">
                           <span class="fa fa-facebook" style="color:white"></span> </a>';

                       
                      ?></li>
                    <li><?php
                     
                        echo '<a href="" target="_blank">
                              <span class="fa fa-instagram" style="color:white" ></span></a>';
                      
                    ?></li>
                    <li><?php
                      
                        echo '<a href="" target="_blank">
                              <samp  class="fa fa-soundcloud" style="color:white"></samp></a>';

                    ?></li>
                    <li><?php
                    
                        echo '<a href="" target="_blank">
                              <samp class="fa fa-twitter-square" style="color:white"></samp></a>';

                    ?></li>
                    <li><?php
                        echo '<a href="" target="_blank">
                            <samp  class="fa fa-youtube-play" style="color:white"></samp></a>';

                    ?></li>
                </ul>
          </div>
      </nav>
      </header>
  <h1>Galeria</h1>
  <center> <div class="container">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                  <li data-target="#myCarousel" data-slide-to="4"></li>
                  <li data-target="#myCarousel" data-slide-to="5"></li>
                  <li data-target="#myCarousel" data-slide-to="6"></li>
                  <li data-target="#myCarousel" data-slide-to="7"></li>
                  <li data-target="#myCarousel" data-slide-to="8"></li>
                  <li data-target="#myCarousel" data-slide-to="9S"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">


                  <div class="item">
                    <?php
                      /* $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT URL_FotosGaleria FROM Banda.FotosGaleria where clv_FotosGaleria=1");
                      while($row=$query->fetch_assoc()){
                        echo '<img src="'.$row['URL_FotosGaleria'].'" alt="aqui yo" width="600" height="250">';
                      } */
                    ?>
                  </div>
                  <div class="item">
                    <?php
                     /*  $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT URL_FotosGaleria FROM Banda.FotosGaleria where clv_FotosGaleria=2");
                      while($row=$query->fetch_assoc()){
                        echo '<img src="'.$row['URL_FotosGaleria'].'" alt="aqui yo" width="600" height="250">';
                      } */
                    ?>
                  </div>
                  <div class="item active">
                    <?php
                      /* $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT URL_FotosGaleria FROM Banda.FotosGaleria where clv_FotosGaleria=3");
                      while($row=$query->fetch_assoc()){
                        echo '<img src="'.$row['URL_FotosGaleria'].'" alt="aqui yo" width="600" height="250">';
                      } */
                    ?>
                  </div>

                  <div class="item">
                    <?php
                     /*  $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT URL_FotosGaleria FROM Banda.FotosGaleria where clv_FotosGaleria=4");
                      while($row=$query->fetch_assoc()){
                        echo '<img src="'.$row['URL_FotosGaleria'].'" alt="aqui yo" width="600" height="250">';
                      } */
                    ?>
                  </div>

                  <div class="item">
                    <?php
                     /*  $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT URL_FotosGaleria FROM Banda.FotosGaleria where clv_FotosGaleria=5");
                      while($row=$query->fetch_assoc()){
                        echo '<img src="'.$row['URL_FotosGaleria'].'" alt="aqui yo" width="600" height="250">';
                      } */
                    ?>
                  </div>
                  <div class="item">
                    <?php
                     /*  $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT URL_FotosGaleria FROM Banda.FotosGaleria where clv_FotosGaleria=6");
                      while($row=$query->fetch_assoc()){
                        echo '<img src="'.$row['URL_FotosGaleria'].'" alt="aqui yo" width="600" height="250">';
                      } */
                    ?>
                  </div>

                  <div class="item">
                    <?php
                      /* $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT URL_FotosGaleria FROM Banda.FotosGaleria where clv_FotosGaleria=7");
                      while($row=$query->fetch_assoc()){
                        echo '<img src="'.$row['URL_FotosGaleria'].'" alt="aqui yo" width="600" height="250">';
                      } */
                    ?>
                  </div>

                  <div class="item">
                    <?php
                      /* $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT URL_FotosGaleria FROM Banda.FotosGaleria where clv_FotosGaleria=8");
                      while($row=$query->fetch_assoc()){
                        echo '<img src="'.$row['URL_FotosGaleria'].'" alt="aqui yo" width="600" height="250">';
                      } */
                    ?>
                  </div>

                  <div class="item">
                    <?php
                     /*  $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT URL_FotosGaleria FROM Banda.FotosGaleria where clv_FotosGaleria=9");
                      while($row=$query->fetch_assoc()){
                        echo '<img src="'.$row['URL_FotosGaleria'].'" alt="aqui yo" width="600" height="250">';
                      } */
                    ?>
                  </div>

                  <div class="item">
                    <?php
                     /*  $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT URL_FotosGaleria FROM Banda.FotosGaleria where clv_FotosGaleria=10");
                      while($row=$query->fetch_assoc()){
                        echo '<img src="'.$row['URL_FotosGaleria'].'" alt="aqui yo" width="600" height="250">';
                      } */
                    ?>
                  </div>


                  <!-- Wrapper for slides -->

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
          </div>
  </center>
  <center><footer>
            Derechos Reservados Xocolatl-Tec &copy contacto:FB:@XocolatlTec Email: xocolatltec.contacto@gmail.com
          </footer></center>
    </body>
  </html>