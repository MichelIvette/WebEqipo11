<?php
// public/logout.php
require_once '../proyecto1/Controlador/AuthControlador.php';
$controlador = new AuthControlador();
$controlador->logout();
