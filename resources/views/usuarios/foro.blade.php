<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foro</title>
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
      <link rel="stylesheet" href="css/titulosneon.css">
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
                <li><a href="{{route('usuarios.galeria')}}">Galeria</a></li>
                <li><a href= "{{route('usuarios.noticias')}}">Noticias</a></li>
                <li class="active"><a href="{{route('usuarios.foro')}}">Foro</a></li>
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
    <br><br>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=296259177680892&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<center>
  <p><a href=""></a></p>
<p><a href="https://www.facebook.com/bandaoutsideoficial">Escribe algo para nosotros¡¡</a></p>
<!--  <h1>Cuentanos</h1>
  <h4>Escribe algo para nosotros¡¡</h4>-->
  <br><br>
<div class="fb-comments" border-color:"red"></div>
</center>
  </body>
</html>