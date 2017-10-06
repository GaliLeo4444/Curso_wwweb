<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Probando PHP!!!!</title>
    </head>
    <body>
        
        <h1>Formulario de prueba</h1><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Nombre
            <input type="text" name="nombre"><br>
            Correo:
            <input type="text" name="correo"><br>
            Genero:<br>
            <input type="radio" name="genero" value="male" > Male<br>
            <input type="radio" name="genero" value="female"> Female<br>
            <input type="radio" name="genero" value="other"> Other<br>
            <input type="submit" value="Enviar">
        </form>
        <br>
        <br>
        
        <?php
            $name = $email = $gen = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST["nombre"]);
                $name = trim($name);
                $email = $_POST["correo"];
                $gen = $_POST["genero"];
                echo '<script language="javascript">';
                echo 'alert("message successfully sent")';
                echo '</script>';
                echo "<h2>Validando datos....</h2>";
                echo $name . "<br>";
                if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    echo("$email NO es un dirección de email válida<br>");
                }
                else {
                   echo ("$email <br>"); 
                }
                echo ("$gen <br>");
            }
        ?>
        
    </body>
</html>
