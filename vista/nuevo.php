<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo proyecto</title>
</head>
<body>
    <div class="container">
    <h1>Nuevo proyecto</h1>
    <form action="nuevo.php" method="post">
    <label for="nombre">Nombre <br>
    <input type="text" name="nombre" id="nombre" required>
<br>
    <label for="tipo">Tipo</label>
        <br>
        <input type="text" name="tipo" id="tipo" required>
        <br><br>
    <input type="submit" value="Guardar" name="enviar">
    </label>
    
    </form>
    <br>
    <a href="index.php">Cancelar</a>


    </div>
</body>
</html>