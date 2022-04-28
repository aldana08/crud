<?php

//Requerimos los archivos del controlador del modelo
require_once 'Controladores/rutasC.php';
require_once 'Controladores/adminC.php';
require_once 'Controladores/usuariosC.php';
require_once 'Modelos/rutasM.php';
require_once 'Modelos/adminM.php';
require_once 'Modelos/usuariosM.php';

$rutas = new RutasControlador();
$rutas->Plantilla();

?>
