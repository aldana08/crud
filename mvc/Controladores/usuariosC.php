<?php

class UsuariosC
{
    //Registro de Usuarios

    public function RegistrarUsuariosC()
    {
        if (isset($_POST['usuarioR'])) {
            $clave = $_POST['claveR'];
            $clave_encriptada = password_hash($clave, PASSWORD_DEFAULT);
            $datosC = [
                'usuario' => $_POST['usuarioR'],
                'clave' => $clave_encriptada,
            ];

            $tablaBD = 'administradores';
            $respuesta = UsuariosM::RegistrarUsuariosM($datosC, $tablaBD);

            if ($respuesta == 'Bien') {
                header('location:index.php?ruta=usuarios');
            } else {
                echo 'ERROR';
            }
        }
    }

    //Mostrar Usuarios

    public function MostrarUsuariosC()
    {
        $tablaBD = 'administradores';
        $respuesta = UsuariosM::MostrarUsuariosM($tablaBD);

        foreach ($respuesta as $key => $value) {
            echo '<tr>
				<td>' .
                $value['id'] .
                '</td>
				<td>' .
                $value['usuario'] .
                '</td>
				<td class="clave">' .
                $value['clave'] .
                '</td>

				<td><a href="index.php?ruta=editar&id=' .
                $value['id'] .
                '"><button><img src="../imagenes/boton-editar.png" alt="editar" class="editar"></button></a></td>
				<td><a href="index.php?ruta=usuarios&idB=' .
                $value['id'] .
                '"><button>Borrar</button></a></td>
			</tr>';
        }
    }

    //Editar Usuario

    public function EditarUsuarioC()
    {
        $datosC = $_GET['id'];
        $tablaBD = 'administradores';
        $respuesta = UsuariosM::EditarUsuarioM($datosC, $tablaBD);

        echo '
            <input type="hidden"  value="' .
            $respuesta['id'] .
            '" name="idE">
            <input type="text" placeholder="Usuario" value="' .
            $respuesta['usuario'] .
            '" name="usuarioE" required>
            <input type="text" placeholder="Ingrese su nueva clave" value="" name="claveE" required>
        
            <input type="submit" value="Actualizar">';
    }

    //Actualizar Usuario

    public function ActualizarUsuarioC()
    {
        if (isset($_POST['usuarioE'])) {
            $clave = $_POST['claveE'];
            $clave_encriptada = password_hash($clave, PASSWORD_DEFAULT);
            $datosC = [
                'id' => $_POST['idE'],
                'usuario' => $_POST['usuarioE'],
                'clave' => $clave_encriptada,
            ];

            $tablaBD = 'administradores';

            $respuesta = UsuariosM::ActualizarUsuarioM($datosC, $tablaBD);

            if ($respuesta == 'Bien') {
                header('location:index.php?ruta=usuarios');
            } else {
                echo 'ERROR';
            }
        }
    }

    //Eliminar Usuario

    public function BorrarUsuarioC()
    {
        if (isset($_GET['idB'])) {
            $datosC = $_GET['idB'];
            $tablaBD = 'administradores';
            $respuesta = UsuariosM::BorrarUsuarioM($datosC, $tablaBD);

            if ($respuesta == 'Bien') {
                header('location:index.php?ruta=usuarios');
            } else {
                echo 'ERROR';
            }
        }
    }
}

?>
