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
  <title>Empleados</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="icon" href="img/icono.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/site.css">


</head>
<body>
  <div class="wrapper">

    <header>
      <button class="menu-btn" id="menuToggle"><i class="fas fa-bars"></i></button>
      <img src="img/Logo_rectangular.jpg" class="logo-container" alt="Logo de la escuela de manejo">
      <div class="header-icons">
        <button class="profile-btn">AD</button>
      </div>
    </header>


    <aside class="sidebar" id="sidebar">
      <ul class="sidebar-menu">
        <a href="dentro.php" class="menu_subrayado"><li><i class="fas fa-home"></i> Inicio</li></a>
        <li class="active"><i class="fa-solid fa-user-tie"></i> Empleados</li>
        <li><i class="fas fa-users"></i> Alumnos</li>
        <li><i class="fas fa-car"></i> Vehículos</li>
        <li><i class="fas fa-calendar-alt"></i> Agenda</li>
        <li><i class="fas fa-file-invoice-dollar"></i> Pagos</li>
        <li><i class="fas fa-chart-bar"></i> Reportes</li>
        <li></li>
        <a href="logout.php" ><li class="salir"><i class="fas fa-sign-out-alt"></i>Cerrar sesión</li></a>
      </ul>
    </aside>

  <!--Contenido y tabla 03-06-2025-->
    <main class="main-content" id="mainContent">
      <div class="welcome">
        <h2>Empleados</h2>
        <div class="contenedor-scroll">
          <table border="1" class="tabla-profesional">
            <thead>
              <tr>
                 <th>RFC</th>
                 <th>Nombre</th>
                 <th>Apellido paterno</th>
                 <th>Apellido materno</th>
                 <th>Puesto</th>
                 <th>Sexo</th>
                 <th>Fecha de nacimiento</th>
                 <th>Teléfono personal</th>
                 <th>Calle</th>
                 <th>Número</th>
                 <th>Colonia</th>
                 <th>Alcaldía</th>
                </tr>
            </thead>
            <tbody>
              <!-- Aquí se insertarán registros desde PHP -->
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <footer>
      <p>&copy; 2025 Start & Go. Todos los derechos reservados.</p>
    </footer>
  </div>

<script src="js/site.js"></script>
</body>
</html>
