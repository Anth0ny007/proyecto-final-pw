<?php

class DBGestionLibreria{
    private $servidor = 'localhost';
    private $dataBase = 'libreria';
    private $user = 'root';
    private $password = 'Sansion@10';

    private function getConexion(){
        $dns = "mysql:host=$this->servidor;dbname=$this->dataBase";
        $obPDO = new PDO($dns, $this->user, $this->password);

        return $obPDO;
    }

    public function getAutores(){
        $pdoConexion = $this->getConexion();
        $resultado = ['no data'];

        if(is_object($pdoConexion)){
            $sql = "SELECT * FROM autores";
            $resultado = $pdoConexion->query($sql);
        }

        return $resultado;
    }

    public function getLibros(){
        $pdoConexion = $this->getConexion();
        $resultado = ['no data'];

        if(is_object($pdoConexion)){
            $sql = 'SELECT * FROM titulo_autor ta INNER JOIN titulos t ON ta.id_titulo = t.id_titulo INNER JOIN autores a ON ta.id_autor = a.id_autor';

            $resultado = $pdoConexion->query($sql);
        }

        return $resultado;
    }

    public function getLibros2(){
        $pdoConexion = $this->getConexion();
        $resultado2 = ['no data'];
        
        if(is_object($pdoConexion)){
            $sql2 = 'SELECT * FROM libros';

            $resultado2 = $pdoConexion->query($sql2);
        }

        return $resultado2;
    }
    
    public function guardarContacto($nombre, $correo, $asunto, $comentario){
        $pdo = $this->getConexion();

        $sql = "INSERT INTO contacto (nombre, correo, asunto, comentario)
                VALUES (:nombre, :correo, :asunto, :comentario)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':asunto', $asunto);
        $stmt->bindParam(':comentario', $comentario);

        return $stmt->execute();
    }

    public function guardarLibro($titulo, $tipo, $precio, $notas, $autor, $fecha_publicacion){
        $pdo = $this->getConexion();

        $sql = "INSERT INTO libros (titulo, tipo, precio, notas, autor, fecha_publicacion)
                VALUES (:titulo, :tipo, :precio, :notas, :autor, :fecha_publicacion)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':notas', $notas);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':fecha_publicacion', $fecha_publicacion);;

        return $stmt->execute();
    }

    public function getLibroAutres(){
        $pdoConexionLA = $this->getConexion();
        $resuladoLA = ['no data'];

        if(is_object($pdoConexionLA)){
            $sqlRequestLA = "SELECT * FROM titulos t LEFT JOIN titulo_autor ta ON t.id_titulo = ta.id_titulo LEFT JOIN autores a ON ta.id_autor = a.id_autor";

            $resuladoLA = $pdoConexionLA->query($sqlRequestLA);
        }
        
        return $resuladoLA;
    }
}


?>