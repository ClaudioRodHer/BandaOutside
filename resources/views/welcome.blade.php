<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link
            href="http://allfont.es/allfont.css?fonts=futura-normal"
            rel="stylesheet"
            type="text/css"/>

        <link rel="stylesheet" href="css/EstiloHome.css">
        <link rel="stylesheet" href="css\estilos0.css">
        

    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">

            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('welcome')}}">Inicio</a></li>
                <li ><a href="{{route('usuarios.discografia')}}">Discografia</a></li>
                <li><a href="{{route('usuarios.videos')}}">Videos</a></li>
                <li><a href="{{route('usuarios.galeria')}}">Galeria</a></li>
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
    <main>
        <hr>
        <center>
            <h1>Banda Out Side</h1>
            <h2>Bienvenido</h2>
        </center>
    </main>

    <!--Esta etiqueta hace que aparezca un video en la pantalla con Autopaly se
    reproducira automaticamente la cancnion al cargar loop es para repetirlo-->
    <video
        src="{{asset('recursos/admin/Outside Sigo aquí ( VIDEO OFICIAL ).mp4')}}"
        autoplay="autoplay"
        loop="loop"
        volume="10"
        onclick="https://www.youtube.com/watch?v=zIG4YHCt7nA"></video>
    <center>
        <footer>
            Derechos Reservados Xocolatl-Tec &copy contacto:FB:@XocolatlTec Email:
            xocolatltec.contacto@gmail.com
        </body>
    </html>