<?php
// proyecto1/Model/Sesion.php
class Sesion {
    public static function registrar($usuario) {
        $archivo = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'sesiones.log';
        $mensaje = "[" . date("Y-m-d H:i:s") . "] Usuario '$usuario' inició sesión.\n";
        file_put_contents($archivo, $mensaje, FILE_APPEND);
    }
}
