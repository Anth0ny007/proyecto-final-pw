<?php

    include 'bd/conexion.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Ant-Library -- Libros</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
            <h1 class="text-white display-1">Catalogo de Libros</h1>
        </div>
    </div>
    <!-- Header End -->


    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Listado de Libros</h6>
                    </div>
                </div>
            </div>

            <div class="row container">
                <?php
                                
                    $libreria = new DBGestionLibreria;
                    $libros = $libreria->getLibros();

                    foreach($libros as $registro){

                        $articulo = '
                            <div class="col-lg-4 col-md-6 pb-4">
                                <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="#">
                                    <img class="img-fluid" src="img/libros.jpg" alt="">

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
                                    </div>
                                </a>
                            </div>
                        ';

                        print($articulo);
                    }
                                
                ?>

                <?php
                                
                    $libreria2 = new DBGestionLibreria;
                    $libros2 = $libreria2->getLibros2();

                    foreach($libros2 as $registro2){

                        $articulo2 = '
                            <div class="col-lg-4 col-md-6 pb-4">
                                <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                                    <img class="img-fluid" src="img/libros.jpg" alt="">

                                    <div class="courses-text">
                                        <h4 class="text-center text-white px-3">
                                            '.$registro2['titulo'].'
                                        </h4>

                                        <div class="border-top w-100 mt-3">
                                            <div class="d-flex justify-content-between p-4">
                                                <span class="text-white">
                                                    <i class="fa fa-user mr-2"></i>
                                                    '.$registro2['autor'].'
                                                </span>
                                               
                                                <span class="text-white">
                                                    <i class="fa fa-dollar-sign mr-2"></i>
                                                    '.$registro2['precio'].'
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        ';

                        print($articulo2);
                    }
                                
                ?>

                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg justify-content-center mb-0">
                          <li class="page-item disabled">
                            <a class="page-link rounded-0" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link rounded-0" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


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