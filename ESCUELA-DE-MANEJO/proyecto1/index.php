<?php
// public/index.php
require_once '../proyecto1/Controlador/AuthControlador.php';
$controlador = new AuthControlador();
$controlador->login();

