<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title></title>
</head>

<div class="container is-fluid">

<br>
<div class="col-xs-12">
		<h1>Lista de usuarios</h1>
    <br>
		<div>
			<a class="btn btn-success" href="../Vistas/Registro.php">Nuevo usuario 
       </a>
		</div>
		<br>

           <br>

			</form>
 
      <table class="table table-striped table-dark " id= "table_id">

                         <thead>    
                         <tr>
                        <th>Documento</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Ciudad</th>
                        <th>Direccion</th>
                        <th>Ocupacion</th>
                        <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

				<?php

$conexion=mysqli_connect("localhost","root","","manzanaspj");               
$SQL="SELECT *FROM mujeres ";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['documento']; ?></td>
<td><?php echo $fila['nombres']; ?></td>
<td><?php echo $fila['apellidos']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['ciudad']; ?></td>
<td><?php echo $fila['direccion']; ?></td>
<td><?php echo $fila['ocupacion']; ?></td>

<td>
<a class="btn" href="editar_user.php?id=<?php echo $fila['codigo']?> ">
Editar </a>

  <a class="btn" href="eliminar_user.php?id=<?php echo $fila['codigo']?>">
Eliminar</a>
  
</td>
</tr>

<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>
 
    <?php
  
}

?>
	</body>
  </table>