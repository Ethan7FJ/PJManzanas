<?php

$codigo= $_GET['id'];
$conexion= mysqli_connect("localhost", "root", "", "manzanaspj");
$consulta= "SELECT * FROM mujeres WHERE codigo = $codigo";
$resultado = mysqli_query($conexion, $consulta);
$mujeres = mysqli_fetch_assoc($resultado);

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


<form  action="../Comple/funcion.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Editar usuario</h3>
                            <div class="form-group">
                            <label for="documento" class="form-label">Documento</label>
                            <input type="text" name="documento" class="form-control" value="<?php echo $mujeres['documento'];?>"required>
                            </div>
                            <div class="form-group">
                                <label for="nombres">Nombres</label><br>
                                <input type="text" name="nombres" class="form-control" placeholder="" value="<?php echo $mujeres['nombres'];?>">
                            </div>
                            <div class="form-group">
                                  <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text"  name="apellidos" class="form-control" value="<?php echo $mujeres['apellidos'];?>" required>
                            </div>
                            <div class="form-group">
                                  <label for="telelefono" class="form-label">Telefono</label>
                                <input type="tel" name="telefono" class="form-control" value="<?php echo $mujeres['telefono'];?>" required>
                            </div>
                            <div class="form-group">
                                  <label for="correo" class="form-label">Correo</label>
                                <input type="email" name="correo" class="form-control" value="<?php echo $mujeres['correo'];?>" required>
                            </div>
                            <div class="form-group">
                                  <label for="ciudad" class="form-label">Ciudad</label>
                                <input type="text"  name="ciudad" class="form-control" value="<?php echo $mujeres['ciudad'];?>" required>
                            </div>
                            <div class="form-group">
                                  <label for="direccion" class="form-label">Direccion</label>
                                <input type="text"  name="direccion" class="form-control" value="<?php echo $mujeres['direccion'];?>" required>
                            </div>
                            <div class="form-group">
                                  <label for="ocupacion" class="form-label">Ocupacion</label>
                                <input type="text"  name="ocupacion" class="form-control" value="<?php echo $mujeres['ocupacion'];?>" required>
                            </div>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="codigo" value="<?php echo $codigo;?>">
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