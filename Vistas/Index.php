<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Full.css">
    <link rel="shortcut icon" href="../SRC/Manzanas.png">
    <title>Inicio</title>
</head>
<body>
<main>
    <article id="Todo">
        <section id="Logo">
            <img class="MC" src="../SRC/Manzanas.png" alt="">
        </section>
        <section id="sesion">
            <form method="post" action="../Comple/sesion.php">
            <div>
                <label class="usu">Documento:</label>
                <input class="USU" type="tel" name="usuario" required>
            </div>
            <button class="INI" name="sesion" type="submit">Iniciar sesion</button>
            <div>
                <button class="REG"><a href="Registro.php">Registrarse</a></button>
            </div>
            <div>
                <button class="REG"><a href="../Comple/user.php">CRUD</a></button>
            </div>
            <div>
                <a class="HOTC" href="#">¿Has olvidado tu contraseña?</a>
            </div>
        </form>
        </section>
    </article>
</main>
</body>
</html>