<!DOCTYPE html>
<html>
    <body>

<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $docu = $_POST["documento"];
       $nacimiento = $_POST["fecha"];
       $nacio = $_POST["nacionalidad"];
       
       $_SESSION["dni"] =  $docu;
       $_SESSION["f_nac"] = $nacimiento;
       $_SESSION["nac"] = $nacio;

        $datosUser = fopen("datosUser.txt", "w");
        fwrite($datosUser, $docu);
        fwrite($datosUser, "\n");
        fwrite($datosUser, $nacimiento);
        fwrite($datosUser, "\n");
        fwrite($datosUser, $nacio);
        fwrite($datosUser, "\n");
        fclose($datosUser);
    }
?>
    
        <a href="MostrarDesdeArchivo.php">Ver datos guardados</a>
    </body>
</html>