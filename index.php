<?php

    include 'bd/conexion.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>LibraryList -- Inicio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style-index.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Start -->
    <?php
    
        include 'template/menutop.php';

    ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Inicio</h1>
        </div>
    </div>
    <!-- Header End -->


    <!-- Libros Start -->
    <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Nuestros Libros</h6>
                    <h1 class="display-4">Los Libros Mas Solicitados</h1>
                </div>
            </div>
        </div>

        <div class="owl-carousel courses-carousel">
                <?php
                                
                    $libreria = new DBGestionLibreria;
                    $libros = $libreria->getLibros();

                    foreach($libros as $registro){
                        $articulo = '
                            <div class="courses-item position-relative">
                                <img class="img-fluid" src="img/libros.jpg" alt="Libros">

                                <div class="courses-text">
                                    <h4 class="text-center text-white px-3">
                                        '.$registro['titulo'].'
                                    </h4>
                                    
                                    <div class="border-top w-100 mt-3">
                                        <div class="d-flex justify-content-between p-4">
                                            <span class="text-white">
                                                <i class="fa fa-user mr-2"></i>
                                                '.$registro['nombre'].' '.$registro['apellido'].'
                                            </span>

                                            <span class="text-white">
                                                <i class="fa fa-dollar-sign mr-2"></i>
                                                '.$registro['precio'].'     
                                            </span>
                                        </div>
                                    </div>

                                    <div class="w-100 bg-white text-center p-4" >
                                        <a class="btn btn-primary" href="Libros.php">Ver mas Libros</a>
                                    </div>
                                </div>
                            </div>
                        ';

                        print($articulo);
                    }
                                
                ?>
        </div>
    </div>
    <!-- Libros End -->


    <!-- Autores Start -->
    <div class="container-fluid py-5">
        <!-- <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Autores</h6>
                <h1 class="display-4">Conoce A Los Autores</h1>
            </div>

            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/user.png" alt="Imagen del autor">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Autores</h6>
                <h1 class="display-4">Conoce A Los Autores</h1>
            </div>
            
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
            
                <?php
                    $autoresL = $libreria->getLibroAutres();
                    $contador = 1;

                    foreach($autoresL as $registroLA){
                        $articleLA = '
                                    <div class="team-item">
                                        <img class="img-fluid w-100" src="img/user.png" alt="Imagen del autor">
                                        <div class="bg-light text-center p-4">
                                            <h5 class="mb-3">' . $registroLA['nombre'] . ' ' . $registro['apellido'] . '</h5>
                                            <p class="mb-2">Web Design & Development</p>

                                            <div class="d-flex justify-content-center">
                                                <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                        ';

                        if($contador <= 3){
                            print($articleLA);
                            $contador++;
                        }

                    }
                ?>
            </div>
        </div>

        <div class="container-link">
            <a href="autores.php">Ver Mas Autores</a>
        </div>
    </div>
    <!-- Autores End -->


    <!-- Footer Start -->
    <?php
    
        include 'template/footer.php';
    
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->

    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>