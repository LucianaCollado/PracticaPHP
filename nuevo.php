<?php

include_once "modelo/proyecto.php";
if (isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];
    $proyecto=new Proyecto();
    $proyecto->setNombre($nombre);
    $proyecto->setTipo($tipo);
    $proyecto->guardar();
    header("location:index.php");
}else{
include "vista/nuevo.php";}
