<?php
include_once './bd/mysql_libreria.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$name = $_POST["name"];
$correo = $_POST["correo"];
$date = $_POST["date"];
$phone = $_POST["phone"];

$sql = "UPDATE usuario SET name = '$name', correo = '$correo', date = '$date', phone = '$phone' WHERE id = '$id'";

bd_connectar();
$exec = bd_ejecutar($sql);


if ($exec == true) {
  header('location: index.php');
} else {
  $mensaje = "Error al actualizar el registro:<br>";
  $mensaje .= $sql . "<br>";
  echo $mensaje;
  echo '<a href="index.php">Regresar</a>';
}

bd_desconectar();


