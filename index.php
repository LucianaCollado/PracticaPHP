<?php
require_once "modelo/Proyecto.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $proyecto = new Proyecto();
    $proyecto->setId($id);
    $proyecto->borrar();
    header("location:index.php");
} else {
    $row = Proyecto::mostrar();
    require_once "vista/index.php";
}