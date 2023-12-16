<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Full.css">
    <link rel="shortcut icon" href="../SRC/Manzanas.png">
    <title>Establecimientos</title>
</head>

<body>
    <main>
        <article>
            <section id="EST">
                <h1 class="Est">Establecimientos</h1>
                <form action="" method="post">
                    <div>
                        <label class="ESCD">Codigo:</label>
                        <input class="escd" type="number" name="cod_e" required>
                    </div>
                    <div>
                        <label class="NMES">Nombre del establecimiento:</label>
                        <input class="nmes" type="text" name="name_e" required>
                    </div>
                    <div>
                        <label class="ESR">Responsable:</label>
                        <input class="esr" type="text" name="res_e" required>
                    </div>
                    <div>
                        <label class="ESDR">Direccion:</label>
                        <input class="esdr" type="text" name="dire_e" required>
                    </div>
                    <div>
                        <button class="ESRE" name="regis_e" type="submit">Registrar</button>
                    </div>
                </form>
                <?php
                include("../Comple/estableci.php"); 
                ?>
            </section>
        </article>
    </main>
</body>

</html>