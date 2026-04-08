<?php

include __DIR__ . '/../bd/conexion.php';

$db = new DBGestionLibreria();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre     = $_POST["nombre"];
    $correo     = $_POST["correo"];
    $asunto     = $_POST["asunto"];
    $comentario = $_POST["comentario"];

    $resultado = $db->guardarContacto($nombre, $correo, $asunto, $comentario);

    if($resultado){
        echo "
        <div style='padding:20px; background:#d4edda; color:#155724; border-radius:5px; margin:20px;'>
            <h3>
                Mensaje enviado correctamente!
            </h3>

            <p>
                Gracias por contactarnos, <strong>$nombre</strong>.
            </p>
            
            <a href='../contact.php'>Regresar</a>
        </div>";

    } 
    
    else{
        echo "
        <div style='padding:20px; background:#f8d7da; color:#721c24; border-radius:5px; margin:20px;'>
            <h3>
                Error al guardar tu mensaje.
            </h3>
            
            <a href='../contact.php'>Regresar</a>
        </div>";
    }
}
?>