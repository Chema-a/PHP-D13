<!DOCTYPE html>
<?php   include('conexion.php')?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
</head>
<body>
    <h1>Into PHP</h1>
    <form action= "store.php" method="POST">
    <label for="tarea"> Nombre de Tarea</label> <br>
    <input type="text" name ="tarea">
    <br>
    <label for="descripcion">Descripcion</label> <br>
    <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
    <br>

    <label for="prioridad"> Prioridad</label><br>
    <select name="prioridad">
        <option value="Alta">Alta</option>
        <option value="Media"> Media</option>
        <option value="Baja">Baja</option>
    </select>
    <br>
    
    <input type="checkbox" name ="urgente" value ="1">
    <label for="urgente">Urgente</label>
    <br>

    <input type="radio" name="tipo" value="1">
    <label for="urgente">Escuela</label>
    <input type="radio" name="tipo" value="0">
    <label for="urgente">Trabajo</label>
    <br>
    <input type="submit" value="Enviar">
    <hr>
    <h2>Lista de Tareas</h2>
    <?php
    $sql = "SELECT * FROM tareas";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo "<table border = '1'>";
    echo "<tr><th>ID</th><th>Tarea</th><th>Descripciom</th></tr>";
    foreach($stmt->fetchAll() as $usuario)
    {
        echo"<tr>
        <td>". $usuario['id'], "</td>
        <td>". $usuario['tarea'], "</td>
        <td>". $usuario['descripcion'], "</td>
        
        </tr>
        ";
    }
    echo "</table>";
    ?>
    </form>
</body>
</html>