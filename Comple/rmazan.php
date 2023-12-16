<?php
    include("conexion.php");

    if(isset($_POST['complet'])){
        if(strlen($_POST['muni_m'])>=1&&
        strlen($_POST['cod_m'])>=1&&
        strlen($_POST['nom_m'])>=1&&
        strlen($_POST['loca_m'])>=1&&
        strlen($_POST['direc_m'])>=1){

            $muni_m = trim($_POST['muni_m']);
            $cod_m = trim($_POST['cod_m']);
            $nom_m = trim($_POST['nom_m']);
            $loca_m = trim($_POST['loca_m']);
            $direc_m = trim($_POST['direc_m']);
            header('location: http://localhost/FinalPG/Vistas/otrasOP.php');

            $consl = "INSERT INTO manzanas(municipio,codigo_m,nombre_m,localidad_m,direccion_m) VALUES('$muni_m','$cod_m','$nom_m','$loca_m','$direc_m')";
            $resulm = mysqli_query($conex,$consl);
            if($resulm){
                ?>
                <h3>Se ha completado su registro de manzanas</h3>
                <?php
            }
            else{
                ?>
                <h3>Ha ocurrido un error en el registro de su manzana</h3>
                <?php
            }
        }
        else{
            ?>
            <h3>Algunos campos estan vacios</h3>
            <?php
        }
    }
?>