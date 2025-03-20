<?php
//include "clases.php"
require "clases.php";

$docente = new Docente($_POST["nombre"], $_POST["apellido"]);
$docente->set("email", $_POST["correo"]);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Datos Docente</title>
</head>

<body>
    <h1>Los datos del docente son:</h1>
    <div>
        <?php
        echo $docente->nombreCompleto();
        ?>
        <br>
    </div>
</body>

</html>