<?php
session_start();
if (!isset($_SESSION["activa"])) {
    header("Location: login.php");
    exit;
}
$usuario = $_SESSION["usuario"];

// CONEXIÓN A LA BASE DE DATOS
try {
    $pdo = new PDO("mysql:host=localhost;dbname=prueba", "root", "53304917Mm$");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Agenda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="img/icono.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/site.css">
</head>
<body>
  <div class="wrapper">

    <?php include 'menu.php'; ?>

    <main class="main-content" id="mainContent">
      <div class="welcome">
        <h2>Agenda</h2>
        <div class="contenedor-scroll">
          <table border="1" class="table table-striped tabla-profesional">
            <thead class="table-dark">
              <tr>
                <th>RFC Empleado</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>RFC Cliente</th>
                <th>Actividad</th>
                <th>Km Recorridos</th>
                <th>Notas</th>
                <th>Examen Teórico</th>
                <th>Examen Práctico</th>
                <th>Notas Resultado</th>
              </tr>
            </thead>
            <tbody>
              <?php
              try {
                  $stmt = $pdo->query("SELECT RFC_EMP, FECHA, HORA, RFC_CLIENTE, ACTIVIDAD, KM_RECORRIDOS, NOTAS, EXAM_TEO, EXAM_PRAC, NOTAS_RESULTADO FROM AGENDA");
                  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      echo "<tr>";
                      foreach ($row as $valor) {
                          echo "<td>" . htmlspecialchars($valor ?? '') . "</td>";
                      }
                      echo "</tr>";
                  }
              } catch (PDOException $e) {
                  echo "<tr><td colspan='10' class='text-danger'>Error al cargar agenda: " . $e->getMessage() . "</td></tr>";
              }
              ?>
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
