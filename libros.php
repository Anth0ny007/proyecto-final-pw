<?php

    include('db/conexion.php');

?>

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
        <link rel="stylesheet" href="assets/css/style-book.css">
        

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

    <!-- Begin #services-section -->
    <section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <h3 class="services-header-title">Lista de libros</h3>
                </div>
            </div>

            <!-- Libros -->
            <?php
            
                $libreria = new DBGestionLibreria;
                $libros = $libreria->getInfoBook();

                foreach($libros as $regLibros){
                    $article = '
                        <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 articleBook">
                            <div class="services-group wow animated zoomIn" data-wow-offset="40">
                                <p class="services-icon"><i class="fa fa-eye fa-5x"></i></p>
                                <h4 class="services-title title">' . $regLibros['titulo'] . '</h4>
                                <div>
                                    <p>Tipo: ' . $regLibros['tipo'] . '</p>
                                    <p> Precio: ' . $regLibros['precio'] . '</p>
                                </div>
                            </div>
                        </article>
                    ';

                    print($article);
                }
            ?>
        </div>      
    </section>
    <!-- End #services-section -->

    <!--End Main Container -->


    
    <!-- Footer -->
    
    <?php
        include('templates/footer.php');
    ?>
    
    <!-- End footer -->
        
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/script_book.js"></script>
    <script>
      new WOW().init();
    </script>

  </body>
</html>
