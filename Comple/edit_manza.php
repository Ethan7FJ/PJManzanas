<?php

$codigo= $_GET['id'];
$conexion= mysqli_connect("localhost", "root", "", "manzanaspj");
$consulta= "SELECT * FROM manzanas WHERE codigo_m = $codigo";
$resultado = mysqli_query($conexion, $consulta);
$manzanas = mysqli_fetch_assoc($resultado);

?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
</head>

<body id="page-top">


<form  action="../Comple/fun_man.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Editar manzanas</h3>
                            <div class="form-group">
                            <label for="municipio" class="form-label">Municipio</label>
                            <input type="text" name="municipio" class="form-control" value="<?php echo $manzanas['municipio'];?>"required>
                            </div>
                            <div class="form-group">
                                <label for="codigo_m">Codigo manzana</label><br>
                                <input type="text" name="codigo_m" class="form-control" placeholder="" value="<?php echo $manzanas['codigo_m'];?>">
                            </div>
                            <div class="form-group">
                                  <label for="nombre_m" class="form-label">Nombre manzana</label>
                                <input type="text"  name="nombre_m" class="form-control" value="<?php echo $manzanas['nombre_m'];?>" required>
                            </div>
                            <div class="form-group">
                                  <label for="localidad_m" class="form-label">Localidad</label>
                                <input type="tel" name="localidad_m" class="form-control" value="<?php echo $manzanas['localidad_m'];?>" required>
                            </div>
                            <div class="form-group">
                                  <label for="direccion_m" class="form-label">Direcccion</label>
                                <input type="email" name="direccion_m" class="form-control" value="<?php echo $manzanas['direccion_m'];?>" required>
                            </div>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="codigo_m" value="<?php echo $codigo_m;?>">
                           <br>

                                <div class="mb-3">
                                    
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="#" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>