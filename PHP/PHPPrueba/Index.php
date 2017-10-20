<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Probando PHP!!!!</title>
    </head>
    <body>
        
        <h1>Formulario de prueba</h1><br>
        <form method="post" action="generacion_datos.php">
            N° Documento
            <input type="text" name="documento"><br>
            Fecha nacimiento (dd/mm/aaaa):
            <input type="text" name="fecha"><br>
            Nacionalidad:<br>
            <input type="radio" name="nacionalidad" value="Argento" > Argento<br>
            <input type="radio" name="nacionalidad" value="otra"> otra<br>
            <input type="submit" value="Enviar">
        </form>
        <br>
        <br>
        <h2>Leyendo archivo de texto....</h2><br>
        <i><?php
            $archivo = fopen("archivo.txt", "w");
            $texto = "Líne1\n";
            fwrite($archivo, $texto);
            $texto = "Líne2\n";
            fwrite($archivo, $texto);
            $texto = "Líne3\n";
            fwrite($archivo, $texto);
            fclose($archivo);
            
            $archivo = fopen("archivo.txt", "r");
            echo fread($archivo,filesize("archivo.txt"));
            fclose($archivo);
        ?></i>
        
        
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
