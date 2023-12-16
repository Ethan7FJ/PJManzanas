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
		<h1>Lista de manzanas registradas</h1>
    <br>
		<div>
			<a class="btn btn-success" href="../Vistas/Manzanas.php">Registrar nueva manzana
       </a>
		</div>
		<br>

           <br>

			</form>
 
      <table class="table table-striped table-dark " id= "table_id">

                         <thead>    
                         <tr>
                        <th>Municipio:</th>
                        <th>Codigo de la manzana:</th>
                        <th>Nombre de la manzana:</th>
                        <th>Localidad:</th>
                        <th>Direccion:</th>
                        </tr>
                        </thead>
                        <tbody>

				<?php

$conexion=mysqli_connect("localhost","root","","manzanaspj");               
$SQL="SELECT *FROM manzanas";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['municipio']; ?></td>
<td><?php echo $fila['codigo_m']; ?></td>
<td><?php echo $fila['nombre_m']; ?></td>
<td><?php echo $fila['localidad_m']; ?></td>
<td><?php echo $fila['direccion_m']; ?></td>

<td>
<a class="btn" href="editar_user.php?id=<?php echo $fila['codigo_m']?> ">
Editar </a>

  <a class="btn" href="eliminar_user.php?id=<?php echo $fila['codigo_m']?>">
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