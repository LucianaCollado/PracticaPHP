<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Proyecto 1</h1>
    <a href="nuevo.php">Crear Nuevo Proyecto</a>
<br><br>
<table border=1 cellpadding=10 cellspacing="0">
<tr>
    <th>Id</th>
    <th>Proyecto</th>
    <th>Tipo</th>
</tr>

<?php 
foreach($row as $dato){?>
<tr>
    <th><?php echo $dato['id'];?></th>
    <th><?php echo $dato['nombre'];?></th>
    <th><?php echo $dato['tipo'];?></th>
</tr>
<?php } ?>


</table>


</body>
</html>