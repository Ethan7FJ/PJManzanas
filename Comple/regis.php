<?php
    include("conexion.php");

    if(isset($_POST['registro'])){
        if(strlen($_POST['Cod'])>=1 &&
        strlen($_POST['TipoD'])>=1 &&
        strlen($_POST['Docu'])>=1 &&
        strlen($_POST['name'])>=1 &&
        strlen($_POST['ape'])>=1 &&
        strlen($_POST['tele'])>=1 &&
        strlen($_POST['correo'])>=1 &&
        strlen($_POST['ciud'])>=1 &&
        strlen($_POST['direc'])>=1 &&
        strlen($_POST['ocupa'])>=1 ){
            
            $Cod = trim($_POST['Cod']);
            $TipoD = trim($_POST['TipoD']);
            $Docu = trim($_POST['Docu']);
            $name = trim($_POST['name']);
            $ape = trim($_POST['ape']);
            $tele = trim($_POST['tele']);
            $correo = trim($_POST['correo']);
            $ciud = trim($_POST['ciud']);
            $direc = trim($_POST['direc']);
            $ocupa = trim($_POST['ocupa']);
            header('location: http://localhost/FinalPG/Vistas/Index.php');

            $consult = "INSERT INTO mujeres(codigo, tipo_documento, documento, nombres, apellidos, telefono, correo, ciudad, direccion, ocupacion) VALUES('$Cod','$TipoD','$Docu','$name','$ape','$tele','$correo','$ciud','$direc','$ocupa')"; 
            $result = mysqli_query($conex,$consult);
            if($result){
                ?>
                <h3 class="complet" >Tu registro se ha realizado correctamente</h3>
                <?php
            }
            else{
                ?>
                <h3 class="fail">Ocurrio un error</h3>
                <?php
            }
        }
        else{
            ?>
                <h3 class="fail">Alguno de los campos estan vacios</h3>
                <?php
        }
    }
?>