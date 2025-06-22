<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION["activa"])) {
    header("Location: login.php");
    exit;
}
$usuario = $_SESSION["usuario"];
$paginaActual = basename($_SERVER['PHP_SELF']);
?>

<header>
  <button class="menu-btn" id="menuToggle"><i class="fas fa-bars" title="Menú principal"></i></button>
  <img src="img/Logo_rectangular.jpg" class="logo-container" alt="Logo de la escuela de manejo">
  <div class="header-icons">
    <button class="profile-btn">AD</button>
  </div>
</header>

<aside class="sidebar" id="sidebar">
  <ul class="sidebar-menu">
    <li class="menu_subrayado <?php echo ($paginaActual == 'dentro.php') ? 'active' : ''; ?>">
      <a href="dentro.php"><i class="fas fa-home"></i> Inicio</a>
    </li>
    <li class="menu_subrayado <?php echo ($paginaActual == 'empleados.php') ? 'active' : ''; ?>">
      <a href="empleados.php"><i class="fa-solid fa-user-tie"></i> Empleados</a>
    </li>
    <li class="menu_subrayado <?php echo ($paginaActual == 'alumnos.php') ? 'active' : ''; ?>">
      <a href="alumnos.php"><i class="fas fa-users"></i> Alumnos</a>
    </li>

    <li class="menu_subrayado <?php echo ($paginaActual == 'agenda.php') ? 'active' : ''; ?>">
      <a href="agenda.php"><i class="fas fa-calendar-alt"></i> Agenda</a>
    </li>
    <li class="menu_subrayado <?php echo ($paginaActual == 'reportes.php') ? 'active' : ''; ?>">
      <a href="reportes.php"><i class="fas fa-chart-bar"></i> Reportes</a>
    </li>
    <li class="salir">
      <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
    </li>
  </ul>
</aside>

