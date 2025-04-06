<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensajes Recibidos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Mensajes Recibidos</h1>

    <?php
    $conexion = new mysqli("localhost", "root", "", "bd_contacto");
    $resultado = $conexion->query("SELECT * FROM mensajes");

    while ($fila = $resultado->fetch_assoc()) {
        echo "<div class='mensaje'>";
        echo "<p><strong>{$fila['nombre']}</strong> ({$fila['correo']})</p>";
        echo "<p>{$fila['mensaje']}</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
