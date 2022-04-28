<?php
session_start();

if (!$_SESSION['Ingreso']) {
    header('location:index.php?ruta=ingreso');

    exit();
}
?>
<br>
<h1>REGISTRAR UN USUARIO</h1>
<form method="post" action="">
	<input type="text" placeholder="Usuario" name="usuarioR" required>
	<input type="text" name="claveR" placeholder="Clave" id="clave" onkeyup="checkPass()" required/>
 	<div id="error-nwl"></div>
	<input type="submit" value="Registrar">	
</form>

<?php
$registrar = new UsuariosC();
$registrar->RegistrarUsuariosC();
?>

