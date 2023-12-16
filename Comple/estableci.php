<?php
    include("conexion.php");

    if(isset($_POST['regis_e'])){
        if(strlen($_POST['cod_e'])>=1 &&
        strlen($_POST['name_e'])>=1 &&
        strlen($_POST['res_e'])>=1 &&
        strlen($_POST['dire_e'])>=1 ){
            
            $cod_e = trim($_POST['cod_e']);
            $name_e = trim($_POST['name_e']);
            $res_e = trim($_POST['res_e']);
            $dire_e = trim($_POST['dire_e']);
            header('location: http://localhost/FinalPG/Vistas/otrasOP.php');

            $consulte = "INSERT INTO establecimientos(codigo_e, nombre_e, responsable, direccion_e) VALUES('$cod_e','$name_e','$res_e','$dire_e')"; 
            $resulte = mysqli_query($conex,$consulte);
            if($resulte){
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