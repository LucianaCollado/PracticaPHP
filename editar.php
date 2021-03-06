<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/estilos.css">
    <title>Editar Documento</title>
</head>

</html>
<?php
require_once "modelo/proyecto.php";
if(isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];
    $id = $_POST['id'];
    $proyecto=new Proyecto();
    $proyecto->setNombre($nombre);
    $proyecto->setTipo($tipo);
    $proyecto->setId($id);
    $proyecto->editar();
    header("location:index.php");

}else{
    $id=$_GET['id'];
    $proyecto=new Proyecto();
    $proyecto->setId($id);
    $row=$proyecto->traerProyecto();
    include_once "vista/editar.php";
}
