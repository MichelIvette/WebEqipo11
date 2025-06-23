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
    <li><a href="#" id="toggle-theme"><i class="fas fa-adjust"></i> Cambiar tema</a></li>
    <li class="salir">
      <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
    </li>
  </ul>
</aside>

<!-- -------------------------CAMBIAR TEMA----------------------------------------------- -->
<style>
  /* Submenú ajustes */
  .submenu {
    display: none;
    list-style: none;
    padding-left: 20px;
  }

  .ajustes-submenu:hover .submenu {
    display: block;
  }

  /* Modo oscuro */
  body.dark-mode {
    background-color: #121212;
    color: #e0e0e0;
  }

  body.dark-mode header,
  body.dark-mode aside {
    background-color: #1a1a1a;
  }

  body.dark-mode a {
    color: #fbf6f6;
  }

  .sidebar a {
    text-decoration: none;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    // Aplicar tema guardado
    const theme = localStorage.getItem("theme");
    if (theme === "dark") {
      document.body.classList.add("dark-mode");
    }

    // Cambiar tema con click
    document.getElementById("toggle-theme").addEventListener("click", (e) => {
      e.preventDefault();
      document.body.classList.toggle("dark-mode");
      localStorage.setItem("theme", document.body.classList.contains("dark-mode") ? "dark" : "light");
    });
  });
</script>
