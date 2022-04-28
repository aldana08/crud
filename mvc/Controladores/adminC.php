<?php
class AdminC
{
    public function IngresoC()
    {
        if (isset($_POST['usuarioI'])) {
            $datosC = [
                'usuario' => $_POST['usuarioI'],
                'clave' => $_POST['claveI']
            ];

            $tablaBD = 'administradores';

            $respuesta = AdminM::IngresoM($datosC, $tablaBD);

            if($respuesta['usuario'] == $_POST['usuarioI'])
             {
                if (password_verify($_POST['claveI'], $respuesta['clave'])) {
                    session_start();
                    $_SESSION['Ingreso'] = true;
                    header('location:index.php?ruta=usuarios');
                } else {
                    echo 'ERROR AL INGRESAR';
                }
                
            } 
        }
    }
}

?>
