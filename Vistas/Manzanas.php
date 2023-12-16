<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Full.css">
    <link rel="shortcut icon" href="../SRC/Manzanas.png">
    <title>Manzanas</title>
</head>
<body>
    <main>
        <article id="MAMU">
            <section id="Manzana">
                <h1 class="pit">Registro de Municipio</h1>
                <form action="" method="post">
                    <div>
                        <label class="MU">Municipio:</label>
                        <input type="text" class="mu" name="muni_m" required>
                    </div>
                        <h1 class="MZ">Registro de Manzanas</h1>
                    <div>
                        <label class="CD">Codigo de la manzana:</label>
                        <input class="cd" type="tel" minlength="4" maxlength="7" name="cod_m" required> 
                    </div>
                    <div>
                        <label class="MN">Nombre Manzana:</label>
                        <input class="mn" type="text" name="nom_m" required>
                    </div>
                    <div>
                        <label class="LC">Localidad:</label>
                        <input class="lc" type="text" name="loca_m" required>
                    </div>
                    <div>
                        <label class="DR">Direccion:</label>
                        <input class="dr" type="text" name="direc_m" required>
                    </div>
                    <div>
                        <button class="COMP" name="complet" type="submit">Completado</button>
                    </div>
                </form>
                <?php
                    include("../Comple/rmazan.php");
                ?>
            </section>
        </article>
    </main>
</body>
</html>