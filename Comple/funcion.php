<?php
   
require_once ("conexion.php");

if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

            case 'acceso_user';
            acceso_user();
            break;

		}

	}

    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","manzanaspj");
		extract($_POST);
		$consulta="UPDATE mujeres SET documento = '$documento', nombres = '$nombres',
		apellidos ='$apellidos', telefono = '$telefono', correo = '$correo', ciudad = '$ciudad', direccion = '$direccion', ocupacion = '$ocupacion' WHERE codigo = '$codigo' ";

		mysqli_query($conexion, $consulta);


		header('Location: ../Comple/user.php');

}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","manzanaspj");
    extract($_POST);
    $codigo= $_POST['id'];
    $consulta= "DELETE FROM mujeres WHERE codigo = $codigo";

    mysqli_query($conexion, $consulta);


    header('Location: ../Comple/user.php');

}