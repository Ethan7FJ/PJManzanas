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
		$consulta="UPDATE manzanas SET municipio = '$municipio', codigo_m = '$codigo_m',
		 nombre_m ='$nombre_m', localidad_m = '$localidad_m', direccion_m = '$direccion_m' WHERE codigo_m = '$codigo_m' ";

		mysqli_query($conexion, $consulta);


		header('Location: ../Comple/manan.php');

}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","manzanaspj");
    extract($_POST);
    $codigo_m= $_POST['id'];
    $consulta= "DELETE FROM manzanas WHERE codigo_m = $codigo_m";

    mysqli_query($conexion, $consulta);


    header('Location: ../Comple/manan.php');

}