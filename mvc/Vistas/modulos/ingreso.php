<br>
<img src="../imagenes/avatar.png" alt="avatar" class="avatar">
	<h1>INGRESAR</h1>
	<form method="post" action="">		
		<input type="text" placeholder="Usuario" name="usuarioI" required>
		<input type="password" placeholder="Contraseña" name="claveI" required>
		<input type="submit" value="Ingresar">
	</form>

<?php
$ingreso = new AdminC();
$ingreso->IngresoC();


?>
