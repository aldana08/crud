<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>

<?php include 'modulos/menu.php'; ?>

<section>

<?php
$rutas = new RutasControlador();
$rutas->Rutas();
?>

</section>

<script src="../js/validacion.js"></script>
	
</body>
</html>