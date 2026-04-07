<?php

    class DBGestionLibreria{
        private $server = 'localhost';
        private $dataBase = 'dblibreria';
        private $user = 'root';
        private $password = 'Sansion@10';

        public function conexionDB(){
            $dns = "mysql:host=$this->server;dbname=$this->dataBase";
            $objPDO = new PDO($dns, $this->user, $this->password);

            return $objPDO;
        }

        // Obtener los libros registrados
        public function getLibros(){
            $pdoConexionL = $this->conexionDB();
            $respuestaL = ['no data'];

            if(is_object($pdoConexionL)){
                $sqlRequestL = 'SELECT * FROM titulos';

                $respuestaL = $pdoConexionL->query($sqlRequestL);
            }

            return $respuestaL;
        }

        // Obtener los autores registrados
        public function getAutores(){
            $pdoConexionA = $this->conexionDB();
            $respuestaA = ['no data'];

            if(is_object($pdoConexionA)){
                $sqlRequestA = "SELECT a.*, concat(a.nombre, ' ', a.apellido) as full_name, b.biografia FROM autores a LEFT JOIN biografias b ON a.id_autor = b.id_autor";

                $respuestaA = $pdoConexionA->query($sqlRequestA);
            }

            return $respuestaA;

        }

        // Obtener informacion combinada de autores y libros
        public function getInfoBook(){
            $pdoConexionIB = $this->conexionDB();
            $respuestaIB = ['no data'];

            if(is_object($pdoConexionIB)){
                $sqlRequestIB = "SELECT t.*, concat(nombre, ' ', apellido) as full_name FROM titulos t INNER JOIN titulo_autor ta ON t.id_titulo = ta.id_titulo INNER JOIN autores a ON ta.id_autor = a.id_autor";

                $respuestaIB = $pdoConexionIB->query($sqlRequestIB);
            }

            return $respuestaIB;
        }

        // Guardar informacion de contacto
        public function guardarContacto($nombre, $correo, $asunto, $comentario){
            $pdoConexionGC = $this->conexionDB();

            $sqlREquestGC = "INSERT INTO contactos (nombre, correo, asunto, comentario)
            VALUES (:nombre, :correo, :asunto, :comentario)";

            $stmt = $pdoConexionGC->prepare($sqlREquestGC);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':asunto', $asunto);
            $stmt->bindParam(':comentario', $comentario);

            return $stmt->execute();
        }

    }

?>