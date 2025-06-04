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
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bienvenido</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--02-06-2025 LINK-->
  <link rel="icon" href="img/icono.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/site.css">


</head>
 <!--sin clase body-->
<body>
  <div class="wrapper">
    <!-- Header -->
    <header>
      <button class="menu-btn" id="menuToggle"><i class="fas fa-bars"></i></button>
      <img src="img/Logo_rectangular.jpg" class="logo-container" alt="Logo de la escuela de manejo">
      <div class="header-icons">
        <button class="profile-btn">AD</button>
      </div>
    </header>

    <!-- 02-06-2025 Sidebar -->
    <aside class="sidebar" id="sidebar">
      <ul class="sidebar-menu">
        <li class="active"><i class="fas fa-home"></i> Inicio</li>
        <a href="empleados.php" class="menu_subrayado"><li><i class="fa-solid fa-user-tie"></i> Empleados</li></a>
        <li><i class="fas fa-users"></i> Alumnos</li>
        <li><i class="fas fa-car"></i> Vehículos</li>
        <li><i class="fas fa-calendar-alt"></i> Agenda</li>
        <li><i class="fas fa-file-invoice-dollar"></i> Pagos</li>
        <li><i class="fas fa-chart-bar"></i> Reportes</li>
        <li></li>
        <a href="logout.php" ><li class="salir"><i class="fas fa-sign-out-alt"></i>Cerrar sesión</li></a>
      </ul>
    </aside>

    <!--02-06-2025, main y se cambio la clase text-center x welcome-->
    <main class="main-content" id="mainContent">
      <div class="welcome">
        <h1>¡Bienvenido, <?= htmlspecialchars($usuario) ?>!</h1>
        <p>Has iniciado sesión correctamente.</p>
        <a href="logout.php" class="logout-btn">Cerrar sesión</a>
      </div>
    </main>

    <!--02-06-2025 Footer -->
    <footer>
      <p>&copy; 2025 Start & Go. Todos los derechos reservados.</p>
    </footer>
  </div>

<!--Hoja vinculada 02-06-2025-->
<script src="js/site.js"></script>
</body>
</html>
