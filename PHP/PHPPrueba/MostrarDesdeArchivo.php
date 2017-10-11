<!DOCTYPE html>
<html>
    <body>
        <h1>Mostrando datos de sesión actual....</h1><br><br>
        <?php
            session_start();
            echo $_SESSION["dni"] . "<br>";
            echo $_SESSION["f_nac"] . "<br>";
            echo $_SESSION["nac"] . "<br>";
        
        ?>
        
        <br><br><h1>Y desde desde archivo....</h1><br><br>
        <?php
            $myfile = fopen("datosUser.txt", "r") or die("Archivo no encontrado");
            echo fgets($myfile) . "<br>";
            echo fgets($myfile) . "<br>";
            echo fgets($myfile) . "<br>";
            fclose($myfile);
        ?>

    </body>
</html>