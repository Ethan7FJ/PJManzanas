<?php
    include("conexion.php");

    if(isset($_POST['subi_e'])){
        if(strlen($_POST['cod_s'])>=1 &&
        strlen($_POST['tip_s'])>=1 &&
        strlen($_POST['cat_s'])>=1 &&
        strlen($_POST['nam_s'])>=1 &&
        strlen($_POST['desc_s'])>=1){
            
            $cod_s = trim($_POST['cod_s']);
            $tip_s = trim($_POST['tip_s']);
            $cat_s = trim($_POST['cat_s']);
            $nam_s = trim($_POST['nam_s']);
            $desc_s = trim($_POST['desc_s']);
            header('location: http://localhost/FinalPG/Vistas/otrasOP.php');

            $consults = "INSERT INTO servicios(codigo_s, tipo_servicio, categoria_servicio, nombre_s, descripcion_s) VALUES('$cod_s','$tip_s','$cat_s','$nam_s','$desc_s')"; 
            $results = mysqli_query($conex,$consults);
            if($results){
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