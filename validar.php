<?php
$usuarios = [
    [
        'correo' => 'admin@gmail.com',
        'clave' => '123456',
        'nombre' => 'Administrador'
    ],
    [
        'correo' => 'juan@gmail.com',
        'clave' => 'abc123',
        'nombre' => 'Juan Pérez'
    ],
    [
        'correo' => 'maria@gmail.com',
        'clave' => 'maria123',
        'nombre' => 'María López'
    ]
];

function buscarUsuario($usuarios, $correo, $clave)
{
    foreach ($usuarios as $usuario) {
        if ($usuario['correo'] === $correo && $usuario['clave'] === $clave) {
            return $usuario;
        }
    }

    return null;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';
$clave = isset($_POST['clave']) ? $_POST['clave'] : '';
$usuario = buscarUsuario($usuarios, $correo, $clave);

if ($usuario !== null) {
    header('Location: bienvenida.php?nombre=' . urlencode($usuario['nombre']));
    exit;
}

header('Location: login.php?error=1');
exit;