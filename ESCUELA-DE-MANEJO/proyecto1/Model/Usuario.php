<?php
// proyecto1/Model/Usuario.php

require_once 'BaseDatos.php';

class Usuario {
    public static function validar($nombre, $clave) {
        try {
            $pdo = BaseDatos::conectar();
            $stmt = $pdo->prepare("SELECT usuario_clave FROM usuario WHERE usuario_nombre = :nombre");
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            return $usuario && md5($clave) === $usuario['usuario_clave'];
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function existe($nombre) {
        try {
            $pdo = BaseDatos::conectar();
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuario WHERE usuario_nombre = :nombre");
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetchColumn() > 0;
        } catch (PDOException $e) {
            return false;
        }
    }
}
