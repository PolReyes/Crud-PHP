<?php

include_once './bd/mysql_libreria.php';

$id = $_REQUEST['id'];



$sql = "UPDATE user SET account='eliminado' WHERE id = $id";

bd_connectar();
$exec = bd_ejecutar($sql);


if ($exec == true) {
    echo 'Usuario eliminado';
} else {
  $mensaje = "Error al eliminar el registro:<br>";
  $mensaje .= $sql . "<br>";
  echo $mensaje;
  echo '<a href="index.php">Regresar</a>';
}

bd_desconectar();
?>


