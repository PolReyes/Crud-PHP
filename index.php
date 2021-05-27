<?php
include_once './bd/mysql_libreria.php';
$sql = "SELECT * FROM usuario WHERE account='activo'";
bd_connectar();
$registros = bd_consultar($sql);
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
        <script src="js/function.js" type="text/javascript"></script>
        <script src="js/delete.js" type="text/javascript"></script>
        <script src="js/bootbox.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <h3>Lista de usuarios</h3>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-success " id="myBtn">Agregar</button>
            <a href="excel.php" target="_top"><button type="button" class="btn btn-success " ><span class="glyphicon glyphicon-save"></span>  Excel</button></a>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4><span class="glyphicon glyphicon-user"></span> Usuario</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form role="form" method="post" action="insertar.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="correo" placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="date" placeholder="Fecha">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Teléfono">
                                </div>
                                
                                <button type="submit" class="btn btn-success btn-block" style="width: 50%; margin: auto">Registrar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                            
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <br>
            <div class="table-responsive">          
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Fecha</th>
                            <th>Teléfono</th>
                            <th>Editar/Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($registros as $vista) { ?>
                            <tr> 
                                <td><?= $vista['id'] ?></td>
                                <td><?= $vista['name'] ?></td>
                                <td><?= strtolower($vista['correo']) ?></td>
                                <td><?= $vista['date'] ?></td>
                                <td><?= $vista['phone'] ?></td>

 
                            
                            <td>
                                
                                <a style="color:#555555 " href="editar.php?id=<?= $vista['id'] ?>"><button type="button" >
                                        <span class="glyphicon glyphicon-pencil"></span></button></a>
                                <a style="color:#555555 "class="delete" data-id="<?php echo $vista['id']; ?>" href="javascript:void(0)">
                                    <button><span class="glyphicon glyphicon-trash"></span></button>
                                </a>
                               </td>
                        </tr>        
                    </tbody>
                    <?php } ?> 
                </table>

            </div>
      
    </body>
 
</html>
