<?php

include("conexion.php");

$USU = $_POST['usuario'];

$consua = "SELECT * FROM mujeres WHERE documento = '$USU'";
$resau = mysqli_query($conex,$consua);
 
$faila = mysqli_num_rows($resau);

if($faila){
    header("Location: ../Vistas/Inicio.php");
}
else{
    ?>
    <h3>ERROR EN LA AUTENTICIDAD</h3>
    <?php
    header("Location: ../Vistas/Index.php");
}
mysqli_free_result($resau);
mysqli_close($conex);
?>