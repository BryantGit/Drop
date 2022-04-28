<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario de inscripcion</title>

    </head>
    <body>
        <h1>Bienvenido a mi pagina web</h1>
        <form method="post" >
        <label for="nombre completo"></label>
        <input type="text" name="nombre">
        <label for="">Correo electronico</label>
        <input type="email" name="email">
        <input type="submit" name="enviar">

        <a href="" class="curso__semestral">Curso semestral</a>
        <a href="" class="curso__anual">Curso anual</a>
        <a href="" class="curso__semi">Curso semiintensivo</a>


        </form>

        <?php
            include("./controllers/mail.php");
        ?>
    </body>
</html>