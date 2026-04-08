<?php

    include 'bd/conexion.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Ant-Library -- Registro de Libros</title>
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
    <link rel="stylesheet" href="css/style-addBook.css">

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
            <h1 class="text-white display-1">Registrar Libro</h1>
        </div>
    </div>
    <!-- Header End -->


    <!-- Agregar Libro Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Quieres Registrar un Libro?</h6>
                        <h1 class="display-4">Registro de Libros</h1>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form">
                        <form action="data/guardar-libro.php" method="POST">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" name="titulo" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Título del Libro" required>
                                </div>

                                <div class="col-6 form-group">
                                    <input type="text" name="tipo" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Tipo (Ej: Novela, Drama, Comic...)" required>
                                </div>

                                <div class="col-6 form-group">
                                    <input type="number" step="0.01" name="precio" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Precio" required>
                                </div>

                                <div class="col-6 form-group">
                                    <input type="text" name="notas" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Notas adicionales">
                                </div>

                                <div class="col-6 form-group">
                                    <input type="text" name="autor" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Autor">
                                </div>

                                <div class="col-6 form-group">
                                    <fieldset class="fecha-publ">
                                        <legend>Fecha de Publicacion</legend>
                                        <input type="date" name="fecha_publicacion" class="form-control border-top-0 border-right-0 border-left-0 p-0" required>
                                    </fieldset>
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Registrar Libro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agregar Libro End -->


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