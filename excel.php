<?php
include_once './bd/mysql_libreria.php';

$sql = "SELECT * FROM user";
bd_connectar();
$registros = bd_consultar($sql);
bd_desconectar();

header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-type: application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=listado_usuarios.xls"); 
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body style="font-family: arial; font-size: 12px;">
    <table style="width: 100%;" >
      <caption><h2>Listado de usuarios</h2></caption>
      <thead>
      
      <th>NOMBRE</th>
      <th>CORREO</th>
      <th>FECHA NACIMIENTO</th>
      <th>TELEFONO</th>
      <th>CUENTA</th>
    </thead>
    <tbody>
      <?php foreach ($registros as $persona) { ?>
        <tr> 
          
          <td><?= $persona['name'] ?></td>
          <td><?= strtolower($persona['correo']) ?></td>
          <td><?= $persona['date'] ?></td>
          <td><?= $persona['phone'] ?></td>
          <td><?= $persona['account'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table><br>
</body>
</html>

