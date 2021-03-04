<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crear</title>
    
</head>
<body>
<div class="container">
    <h1>Proyectos existentes</h1>
    <a href="nuevo.php">Crear Nuevo Proyecto</a>
<br><br>
<table border=1 cellpadding=10 cellspacing="0">
<tr>
    <th class="titular">Id</th>
    <th class="titular">Proyectos</th>
    <th class="titular">Tipo</th>
</tr>

<?php 
foreach($row as $dato){?>
<tr>
    <th><?php echo $dato['id'];?></th>
    <th><?php echo $dato['nombre'];?></th>
    <th><?php echo $dato['tipo'];?></th>
    <th><a href="index.php?id=<?php echo $dato['id'];?>">Eliminar</a></th>
    <th><a href="editar.php?id=<?php echo $dato['id'];?>">Editar</a></th>
</tr>
<?php } ?>


</table>

</div>
</body>
</html>