<?php
include_once './bd/mysql_libreria.php';
$id = $_GET["id"];

$sql = "SELECT * FROM usuario WHERE id = $id";
bd_connectar();
$registros = bd_consultar($sql);
$persona = $registros[0];
bd_desconectar();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crud</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

            
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                            <h4><span class="glyphicon glyphicon-user"></span> Editar Usuario</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                          
                            <form role="form" method="post" action="actualizar.php">
                                <input type="text" name="id" value="<?= $persona['id'] ?>" hidden="true" readonly="true">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Nombre" value="<?= $persona['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="correo" placeholder="Correo" value="<?= strtolower($persona['correo']) ?>">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="date" placeholder="Fecha" value="<?= $persona['date'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Teléfono" value="<?= $persona['phone'] ?>">
                                </div>
                                
                                <button type="submit" class="btn btn-success btn-block" style="width: 50%; margin: auto">Guardar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                          <a href="index.php"> <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Regresar </button></a>
                            
                        </div>
                    </div>

                </div>
            
 </body>
</html>
