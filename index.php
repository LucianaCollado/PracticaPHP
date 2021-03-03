<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
</body>
</html>
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