<?php
require_once "conexion.php";
class Proyecto
{
    //atributos
    private $id;
    private $nombre;
    private $tipo;
    const TABLA = "proyecto";
    //constructor
    public function __construct($nombre = null, $tipo = null, $id = null)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->id = $id;
    }
    //setters y getters
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getId()
    {
        return $this->id;
    }
    //otros métodos
    public function guardar()
    {
        try {
            $conexion = new Conexion();
            $sql = "INSERT INTO " . self::TABLA . "(nombre,tipo) VALUES (?,?)";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(1, $this->nombre, PDO::PARAM_STR);
            $stmt->bindParam(2, $this->tipo, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            echo "Error no puedo guardar " . $e->getMessage();
        } finally {
            $conexion = null;
        }
    }

    public static function mostrar()
    {
        try {
            $conexion = new Conexion();
            $sql = "SELECT *FROM " . self::TABLA;
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll();
            return $row;
        } catch (Exception $e) {
            echo "Error no puedo mostrar " . $e->getMessage();
        } finally {
            $conexion = null;
        }
    }

    public function borrar()
    {
        try {
            $conexion = new Conexion();
            $sql = "DELETE FROM " . self::TABLA . " WHERE id=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(1, $this->id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            echo "Error no puedo eliminar " . $e->getMessage();
        } finally {
            $conexion = null;
        }
    }

    public function traerUnTipo()
    {
        try {
            $conexion = new Conexion();
            $sql = "SELECT *FROM " . self::TABLA . " WHERE id=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(1, $this->id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row;
        } catch (Exception $e) {
            echo "Error no puedo mostrar " . $e->getMessage();
        } finally {
            $conexion = null;
        }
    }

    public function editar()
    {
        try {
            $conexion = new Conexion();
            $sql = "UPDATE " . self::TABLA . " SET nombre=?,tipo=? WHERE id=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(1, $this->nombre, PDO::PARAM_STR);
            $stmt->bindParam(2, $this->tipo, PDO::PARAM_STR);
            $stmt->bindParam(3, $this->id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            echo "Error no puedo editar el producto " . $e->getMessage();
        } finally {
            $conexion = null;
        }
    }
}
