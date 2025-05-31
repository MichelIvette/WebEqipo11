<?php
require_once __DIR__ . '/../Model/Usuario.php';
require_once __DIR__ . '/../Model/Sesion.php';

class AuthControlador {
    public function login() {
    session_start();
    $error = null;

    // Verifica si ya hay sesión activa
    if (isset($_SESSION["activa"]) && $_SESSION["activa"] === true) {
        header("Location: dentro.php");
        exit;
    }

    // Verifica cookie si no hay sesión
    if (!isset($_SESSION["activa"]) && isset($_COOKIE["usuario_recordado"])) {
        $usuario = $_COOKIE["usuario_recordado"];
        if (Usuario::existe($usuario)) {
            $_SESSION["activa"] = true;
            $_SESSION["usuario"] = $usuario;
            Sesion::registrar($usuario);

            // Renovar cookie
            setcookie("usuario_recordado", $usuario, time() + (7 * 24 * 60 * 60), "/");

            header("Location: dentro.php");
            exit;
        } else {
            // Si usuario no es válido, se borra cookie
            setcookie("usuario_recordado", "", time() - 3600, "/");
        }
    }

    // Si llega por POST, es intento de login
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = $_POST["nombre"] ?? '';
        $clave = $_POST["clave"] ?? '';

        if (Usuario::validar($nombre, $clave)) {
            $_SESSION["activa"] = true;
            $_SESSION["usuario"] = $nombre;
            Sesion::registrar($nombre);

            if (isset($_POST["recordarme"])) {
                setcookie("usuario_recordado", $nombre, time() + (7 * 24 * 60 * 60), "/");
            } else {
                setcookie("usuario_recordado", "", time() - 3600, "/");
            }

            header("Location: dentro.php");
            exit;
        } else {
            $error = "Login incorrecto.";
        }
    }

    include __DIR__ . '/../Vista/login.php';
}


    public static function logout() {
        session_start();
        session_unset();
        session_destroy();
        setcookie("usuario_recordado", "", time() - 3600, "/");
        header("Location: login.php");
        exit;
    }
}
