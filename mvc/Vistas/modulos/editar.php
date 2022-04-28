<?php
session_start();

if (!$_SESSION['Ingreso']) {
    header('location:index.php?ruta=ingreso');
    exit();
}
?>

<br>
<h1>EDITAR USUARIO</h1>
<form method="post">  
<?php
$editar = new UsuariosC();
$editar->EditarUsuarioC();

$actualizar = new UsuariosC();
$actualizar->ActualizarUsuarioC();
?>
</form>


