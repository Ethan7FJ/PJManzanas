<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Full.css">
    <title>Registro</title>
    <link rel="shortcut icon" href="../SRC/Manzanas.png">
</head>
<body id="registrar">
<main>
    <article id="REg">
        <form method="POST">
        <section id="resgis">
            <h1 class="tit">Registro de sesion</h1>
            <div>
                <label class="Code">Codigo:</label>
                <input class="cODE" type="number" name="Cod" minlength="5" maxlength="10" required>
            </div>
            <div>
                <label class="TC">Tipo de documento:</label>
                <select name="TipoD" class="tc" required>
                    <option>Cedula de Ciudadania</option>
                    <option>Tarjeta de Identidad</option>
                    <option>Cedula Extranjera</option>
                    <option>Documento Extranjero</option>
                    <option>Pasaporte</option>
                    <option>Registro Civil</option>
                </select>
            </div>
            <div>
                <label class="DI">Documento de Identidad:</label>
                <input class="di" type="tel" name="Docu" minlength="7" maxlength="15" required>
            </div>
            <div>
                <label class="NM">Nombres:</label>
                <input class="nm" type="text" name="name" required>
            </div>
            <div>
                <label class="AP">Apellidos:</label>
                <input class="ap" type="text" name="ape" required>
            </div>
            <div>
                <label class="TL">Telefono:</label>
                <input class="tl" type="tel" minlength="7" maxlength="10" name="tele" required>
            </div>
            <div>
                <label class="CR">Correo:</label>
                <input class="cr" type="email" name="correo" required>
            </div>
            <div>
                <label class="CI">Ciudad:</label>
                <input class="ci" type="text" name="ciud" required>
            </div>
            <div>
                <label class="DR">Direccion:</label>
                <input class="dr" type="text" name="direc" required>
            </div>
            <div>
                <label class="DR">Ocupacion:</label>
                <input class="dr" type="text" name="ocupa" required>
            </div>
            <div>
                <button class="RELG" type="submit" name="registro">Registrarse</button>
            </div>  
        </section>
        </form>
        <?php
            include("../Comple/regis.php");        
        ?>
    </article>
</main>
</body>
</html>