<?php
class Conexion extends PDO
{
    private $tipoBase = 'mysql';
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $bd = 'proyectos';
    public function __construct()
    {
        try {
            parent::__construct("{$this->tipoBase}:dbname={$this->bd};host={$this->host};charset=utf8", $this->user, $this->pass);
            echo "Me conecto correctamente";
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        } 
    }
}

//new Conexion();