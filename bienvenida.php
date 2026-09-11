<?php
$nombre = isset($_GET['nombre']) ? trim($_GET['nombre']) : '';

if ($nombre === '') {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="css/estilos.css/estilos.css">
</head>
<body>
    <main class="contenedor">
        <section class="bienvenida">
            <h1>Bienvenido, <?php echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); ?>.</h1>
            <a href="login.php">Cerrar sesión</a>
        </section>
    </main>
</body>
</html>