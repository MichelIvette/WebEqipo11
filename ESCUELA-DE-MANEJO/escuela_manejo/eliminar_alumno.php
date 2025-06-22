<?php
session_start();
if (!isset($_SESSION["activa"])) {
    header("Location: login.php");
    exit;
}

// CONEXIÓN A LA BASE DE DATOS
try {
    $pdo = new PDO("mysql:host=localhost;dbname=prueba", "root", "53304917Mm$");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $_SESSION['mensaje'] = "<div class='alert alert-danger'>Error de conexión: " . $e->getMessage() . "</div>";
    header("Location: alumnos.php");
    exit;
}

// Procesar eliminación de alumnos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar"])) {
    try {
        $rfcSeleccionados = $_POST['seleccionados'] ?? [];
        if (!empty($rfcSeleccionados)) {
            $placeholders = implode(',', array_fill(0, count($rfcSeleccionados), '?'));
            $sql = "DELETE FROM CLIENTES WHERE RFC_CLIENTE IN ($placeholders)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($rfcSeleccionados);
            $_SESSION['mensaje'] = "<div class='alert alert-success'>Alumno(s) eliminado(s) correctamente</div>";
        } else {
            $_SESSION['mensaje'] = "<div class='alert alert-warning'>No se seleccionaron alumnos para eliminar</div>";
        }
    } catch (PDOException $e) {
        $_SESSION['mensaje'] = "<div class='alert alert-danger'>Error al eliminar alumno(s): " . $e->getMessage() . "</div>";
    }
}

header("Location: alumnos.php");
exit;
?>