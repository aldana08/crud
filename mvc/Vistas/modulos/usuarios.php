<?php
session_start();

if (!$_SESSION['Ingreso']) {
    header('location:index.php?ruta=ingreso');

    exit();
}
?>

<br>
<h1>Usuarios</h1>
<table class="tabla" id="t1" border="1">		
	<thead>			
		<tr>
			<th>Id</th>
			<th>Usuario</th>
			<!-- <th>Clave</th> -->
			<th>Editar</th>
			<th>Borrar</th>
		</tr>
	</thead>
	<tbody>
			
<?php
$mostrar = new UsuariosC();
$mostrar->MostrarUsuariosC();
?>
	</tbody>
	</table>
	
<?php
$eliminar = new UsuariosC();
$eliminar->BorrarUsuarioC();
?>

