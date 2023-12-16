<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Full.css">
    <link rel="shortcut icon" href="../SRC/Manzanas.png">
    <title>Servicios</title>
</head>
<body>
    <main>
        <article id="TCS">
                <section id="TS">
                    <h1 class="SRV">Servicio</h1>
                    <form action="" method="post">
                    <div>
                        <label class="CSS">Codigo:</label>
                        <input class="css" type="number" name="cod_s" required>
                    </div>
                    <div>
                        <label class="TDS">Tipo de servicio:</label>
                        <input class="tds" type="text" name="tip_s" required>
                    </div>
                    <div>
                        <label class="CTS">Categoria de servicio:</label>
                        <input class="cts" type="text" name="cat_s" required>
                    </div>
                    <div>
                        <label class="NSS" for="">Nombre:</label>
                        <input class="nss" type="text" name="nam_s" required>
                    </div>
                    <div>
                        <label class="DSS">Descripcion del servicio:</label>
                        <textarea class="dss" name="desc_s" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <div>
                        <button class="Sub3" name="subi_e" type="submit">Subir</button>
                    </div>
                </form>
                <?php
                include("../Comple/servi.php");   
                ?>
                </section>
        </article>
    </main>
</body>
</html>