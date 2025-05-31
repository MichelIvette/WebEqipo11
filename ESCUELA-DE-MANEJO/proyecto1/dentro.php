<?php
session_start();
if (!isset($_SESSION["activa"])) {
    header("Location: login.php");
    exit;
}
$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-primary text-white d-flex justify-content-center align-items-center vh-100">

<div class="text-center">
    <h1 class="display-4">¡Bienvenido, <?= htmlspecialchars($usuario) ?>!</h1>
    <p class="lead mt-3">Has iniciado sesión correctamente.</p>
    <a href="logout.php" class="btn btn-light mt-4">Cerrar sesión</a>
</div>

</body>
</html>
