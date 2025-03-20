<?php
//include "clases.php"
require "clases.php";

$estudiante = new Estudiante();

$estudiante -> set("apellido", $_POST["apellido"]);
$estudiante->set("email", $_POST["correo"]);
$estudiante->set("edad", $_POST["edad"]);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Datos Estudiante</title>
</head>

<body>
    <h1>Los datos del Estudiante son:</h1>
    <div>
        <?php
        echo $estudiante->nombreCompleto();
        echo $estudiante->get("edad");
        echo $estudiante->get("email");
        echo $mensaje;
        ?>
        <br>
    </div>
</body>

</html>