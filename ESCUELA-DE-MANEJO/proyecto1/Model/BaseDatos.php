<?php
// proyecto1/Model/BaseDatos.php
class BaseDatos {
    public static function conectar() {
        return new PDO("mysql:host=localhost;dbname=pruebas", "root", "12345", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}
