<?php
$error = isset($_GET['error']) && $_GET['error'] === '1';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="css/estilos.css/estilos.css">
</head>
<body>
    <main class="contenedor">
        <section class="formulario">
            <h1>Inicio de sesión</h1>
            <?php if ($error): ?>
                <p class="error">Correo o contraseña incorrectos.</p>
            <?php endif; ?>
            <form action="validar.php" method="POST">
                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" required>

                <label for="clave">Clave</label>
                <input type="password" id="clave" name="clave" required>

                <button type="submit">Ingresar</button>
            </form>
        </section>
    </main>
</body>
</html>