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

<body>
  <div class="wrapper">
    <?php include 'menu.php'; ?>

    <main class="main-content" id="mainContent">   

<?php
// Inicia la sesión SOLO si no está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Mostrar el mensaje solo si no se ha mostrado antes
if (!isset($_SESSION['bienvenida_mostrada'])) {
    $_SESSION['bienvenida_mostrada'] = true;
?>
    <div id="bienvenida" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>¡Bienvenido, <?= htmlspecialchars($usuario) ?>!</strong> Has iniciado sesión correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>
<?php } ?>

      <!--Body-->
      <section class="hero">
        <img src="img/clase1.jpg" alt="Clase de manejo" class="hero-img">
        <div class="hero-text">
          <h1>Start & Go</h1>
          <p>Tu camino seguro comienza aquí <br> La escuela de manejo que te prepara para la vida.</p>
          <!--<a href="#" class="btn btn-secondary btn-lg">¡Inscríbete!</a>-->
        </div>
      </section>
            <!-- Introducción -->
             <br>
      <section class="intro py-4 px-3 bg-light rounded shadow-sm mb-5">
        <h2 class="mb-3 text-center">¿Quiénes somos?</h2>
        <p>Somos una escuela de manejo comprometida con tu seguridad y aprendizaje, contamos con instructores certificados, vehículos modernos y programas personalizados para que obtengas tu licencia con confianza.</p>
        <p>Nuestro objetivo es ayudarte a convertirte en un conductor responsable y seguro en cualquier situación vial.</p>
      </section>

      <!-- Servicios -->
      <br><br>
      <section class="services d-flex justify-content-around text-center mb-5 flex-wrap">
        <div class="service-card px-3 mb-4" style="max-width: 250px;">
          <i class="fas fa-car fa-3x mb-2 text-primary"></i>
          <h4>Curso Básico</h4>
          <p>Aprende desde cero las bases del manejo seguro y responsable.</p>
        </div>
        <div class="service-card px-3 mb-4" style="max-width: 250px;">
          <i class="fas fa-road fa-3x mb-2 text-primary"></i>
          <h4>Prácticas en Ruta</h4>
          <p>Ejercita tus habilidades en entornos reales con supervisión.</p>
        </div>
        <div class="service-card px-3 mb-4" style="max-width: 250px;">
          <i class="fas fa-certificate fa-3x mb-2 text-primary"></i>
          <h4>Certificación</h4>
          <p>Obtén tu licencia con la guía de instructores certificados.</p>
        </div>
      </section>

      <!-- Testimonios -->
      <section class="testimonials bg-light p-4 rounded shadow-sm mb-5">
        <h2 class="text-center mb-4">Lo que dicen nuestros alumnos</h2>
        <div class="testimonial-item mb-3">
          <p class="fst-italic">"Gracias a Start & Go aprobé mi examen en la primera oportunidad. La atención es excelente."</p>
          <p class="fw-bold mb-0">- María G.</p>
        </div>
        <div class="testimonial-item">
          <p class="fst-italic">"Las clases prácticas me ayudaron a sentirme seguro al volante. Muy recomendados."</p>
          <p class="fw-bold mb-0">- Luis M.</p>
        </div>
      </section>

    </main>
    <footer>
      <p>&copy; 2025 Start & Go. Todos los derechos reservados.</p>
    </footer>

  </div>

  <script src="js/site.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  

</body>
</html>

