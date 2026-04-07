<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Office</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="assets/css/style-projects.css">
        <link rel="stylesheet" href="assets/css/style-contacto.css">
        

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    </head>


    <body>

    <!-- Header -->
        
    <?php
        include('templates/menu.php');
    ?>

    <!-- End Header -->


    <!-- Main Container -->

        <div class="container-fluid-kamn">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                    <h4>Contactame</h4>
                    <p class="block-author"> LibraryList SRL</p>
                    <p>Telefono: 1-829-857-2510</p>
                    <em class="block-author">Correo: 2023-1394@itla.edu.do </em> <br>
                    <br>
                    <p class="lead">Redes Solciales</p><hr>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#">GitHub</a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#">Linkeding</a>
                    </div>
                    <br>
                </div>

                <div class="col-lg-5">
                    <div class="feedback-form">
          
                        <div id="contact-response"></div>
            
                        <form action="contacto.php" method="post" id="contact-form">
                            <fieldset>
                                <div class="form-group form-group-fullname">
                                    <label class="control-label" for="nombre">Nombre *</label>
                                    <input type="text" class="form-control" name="nombre" id="fullname" placeholder="Ingrese su nombre completo">
                                </div>

                                <div class="form-group form-group-email">
                                    <label class="control-label" for="email">Correo *</label>
                                    <input type="email" class="form-control" name="correo" id="email" placeholder="Ingrese su correo electronico">
                                </div>

                                <div class="form-group form-group-asunto">
                                    <label class="control-label" for="asunto">Asunto *</label>
                                    <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Diganos el asunto">
                                </div>

                                <div class="form-group form-group-comentario">
                                    <label class="control-label" for="comentario">Comentario *</label>
                                    <textarea class="form-control" name="comentario" id="comentario" rows="3" placeholder="Dejenos un comentario"></textarea>
                                </div>           
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </fieldset>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
            
    <!--End Main Container -->


    <?php

        include(__DIR__ . '../db/conexion.php');

        $db = new DBGestionLibreria();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $asunto = $_POST["asunto"];
            $comentario = $_POST["comentario"];

            $resultado = $db->guardarContacto($nombre, $correo, $asunto, $comentario);

            if($resultado){
                print( '
                <div class="mensaje-form">
                    <h3>
                        Mensaje enviado correctamente!
                    </h3>

                    <p>
                        Gracias por contactarnos.
                    </p>
                </div>');

            } 
            
            else{
                print( '
                <div class="mensaje-error">
                    <h3>
                        Error al guardar tu mensaje.
                    </h3>
                </div>');
            }
        }
    ?>


    <!-- Footer -->
    
    <?php
        include('templates/footer.php');
    ?>
    
    <!-- End footer -->

    
    <div class="copyright text center">
        <p>&copy; Copyright 2014, <a href="#">Your Website Link</a>. Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
    </div>


    
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

  </body>
</html>
