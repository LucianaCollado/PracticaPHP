<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Nuevo Proyecto</title>
</head>
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
