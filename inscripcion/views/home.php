<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda virtual</title>

    </head>
    <body>
        <h1>Bienvenido a mi pagina web</h1>
        <form method="post" >
        <label for="nombre completo"></label>
        <input type="text" name="nombre">
        <label for="">Correo electronico</label>
        <input type="email" name="email">
        <input type="submit" name="enviar">
        </form>

        <?php
            include("./controllers/mail.php");
        ?>
    </body>
</html>