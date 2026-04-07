<?php

    include('db/conexion.php');

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Autores</title>
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
        <link rel="stylesheet" href="assets/css/style-autores.css">
        

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
    <section class="center section-global-wrapper">
        <div class="container">
            
            <div class="row container">
                <div class="services-header">
                    <h3 class="services-header-title">Lista de Autores</h3>
                </div>
            </div>

            <div class="row">

                <?php
                
                    $libreria = new DBGestionLibreria;
                    $autores = $libreria->getAutores();

                    foreach($autores as $regAutores){
                        $article = '
                            <div class="col-md-6 articulo">
                                <div class="blockquote-box blockquote-info animated wow fadeInLeft clearfix">
                                    <div class="square pull-left">
                                        <img src="assets/img/team/member2.png" alt="Feature-img" height="80" width="100">
                                    </div>

                                    <div>
                                        <h4>
                                            '. $regAutores['full_name'] . '
                                        </h4>
                                        <p>' . $regAutores['telefono'] . '</p>
                                        <p>
                                            ' . $regAutores['biografia'] . '
                                        </p>
                                    </div>
                                </div>
                            </div>
                        ';

                        print($article);
                    }
                
                ?>
            </div>
        </div>
    </section>

    <!--End Main Container -->


    <!-- Footer -->
    
    <?php
        include('templates/footer.php');
    ?>
    
    <!-- End footer -->

    
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

  </body>
</html>
