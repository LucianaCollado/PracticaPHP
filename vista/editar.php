<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Editar proyecto</title>
</head>
<body>
    <div class="container">
    <h1>Editar</h1>
    <form action="nuevo.php" method="post">
    <label for="nombre">Nombre <br>
    <input type="text" name="nombre" id="nombre" required value="<?php echo $row['nombre']?>"> 
<br>
    <label for="tipo">Tipo</label>
        <br>
        <input type="text" name="tipo" id="tipo" required value="<?php echo $row['tipo']?>">
        <br>
    <label for="id">Id</label><br>

        <input type="text" name="id" value="<?php echo $row['id']?>">
        <br><br>
    <input type="submit" value="Guardar" name="enviar">
    </label>
 
    </form>
    <br>
    <a href="index.php">Cancelar</a>


    </div>
</body>
</html>