<?php
include('conexion.php');
  if(!empty($_POST['tarea']))
  {
      //Recibir datos
      $tarea = $_POST['tarea'];
      $descripcion = $_POST['descripcion'];
      $urgente = $_POST['urgente'];
      $tipo = $_POST['tipo'];
      $prioridad = $_POST['prioridad'];
      //Validar datos ( Sanitización de datos y scripts)

      //Guardar a DB
      $sql = "INSERT INTO tareas (tarea, descripcion, urgente, tipo, prioridad) VALUES ('$tarea','$descripcion','$urgente','$tipo', '$prioridad')";
      $conn->exec($sql);
      header('Location: index.php');

  }
  else{
      echo "No hay datos";
  }
  // echo var_dump($_GET); //VARIABLES GLOBAL DE TIPO GET y var dumop hace limpieza de la variable
?>

