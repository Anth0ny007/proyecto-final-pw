<?php
    require "../bd/conexion.php";

    $db = new DBGestionLibreria();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $titulo = $_POST["titulo"];
        $tipo = $_POST["tipo"];
        $precio = $_POST["precio"];
        $notas = $_POST["notas"];
        $autor = $_POST["autor"];
        $fecha_publicacion = $_POST["fecha_publicacion"];

        $resultado = $db->guardarLibro($titulo, $tipo, $precio, $notas, $autor, $fecha_publicacion);

        if($resultado){
            echo "
                <div style='padding:20px; background:#d4edda; color:#155724; border-radius:5px; margin:20px;'>
                    <h3>
                        Libro registrado correctamente!
                    </h3>

                    <p>
                        El libro <strong>$titulo</strong> fue añadido a la librería.
                    </p>
                </div>
            ";
        } 
        
        else {
            echo "
                <div style='padding:20px; background:#f8d7da; color:#721c24; border-radius:5px; margin:20px;'>
                    <h3>
                        Error al registrar el libro.
                    </h3>
                </div>
            ";
        }
    }
?>