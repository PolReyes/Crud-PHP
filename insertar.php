<?php

include_once './bd/mysql_libreria.php';


$name = $_POST["name"];
$correo = $_POST["correo"];
$date = $_POST["date"];
$phone = $_POST["phone"];


$sql = "INSERT INTO user ( name,correo,date,phone,registered,account )";
$sql .= "values('$name','$correo','$date','$phone',CURRENT_TIMESTAMP,'activo')";
 bd_connectar();
$exec = bd_ejecutar($sql);

if ($exec == true) {
  header('location: index.php');
} else {
  $mensaje = "Error al ingresar el registro:<br>";
  $mensaje .= $sql . "<br>";
  echo $mensaje;
  echo '<a href="index.php">Regresar</a>';
}
 

