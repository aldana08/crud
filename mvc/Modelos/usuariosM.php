<?php

require_once 'conexionBD.php';

class UsuariosM extends ConexionBD
{
    //Registro de Usuarios

    public static function RegistrarUsuariosM($datosC, $tablaBD)
    {
        $pdo = ConexionBD::cBD()
            ->prepare("INSERT INTO $tablaBD (id, usuario, clave) 
                                            VALUES (:id, :usuario, :clave)");

        $pdo->bindParam(':id', $datosC['id'], PDO::PARAM_STR);
        $pdo->bindParam(':usuario', $datosC['usuario'], PDO::PARAM_STR);
        $pdo->bindParam(':clave', $datosC['clave'], PDO::PARAM_STR);

        if ($pdo->execute()) {
            return 'Bien';
        } else {
            return 'Error';
        }

        $pdo->close();
    }

    //Mostrar Usuarios

    public static function MostrarUsuariosM($tablaBD)
    {
        $pdo = ConexionBD::cBD()->prepare(
            "SELECT id, usuario, clave FROM $tablaBD"
        );

        $pdo->execute();
        return $pdo->fetchAll();
        $pdo->close();
    }

    //Editar Usuario

    public static function EditarUsuarioM($datosC, $tablaBD)
    {
        $pdo = ConexionBD::cBD()->prepare("SELECT id, usuario, clave
                                            FROM $tablaBD WHERE id = :id");

        $pdo->bindParam(':id', $datosC, PDO::PARAM_INT);

        $pdo->execute();
        return $pdo->fetch();
        $pdo->close();
    }

    //Actualizar Usuario

    public static function ActualizarUsuarioM($datosC, $tablaBD)
    {
        $pdo = ConexionBD::cBD()
            ->prepare("UPDATE $tablaBD SET usuario = :usuario,
                                                clave = :clave WHERE id = :id");

        $pdo->bindParam(':id', $datosC['id'], PDO::PARAM_INT);
        $pdo->bindParam(':usuario', $datosC['usuario'], PDO::PARAM_STR);
        $pdo->bindParam(':clave', $datosC['clave'], PDO::PARAM_STR);

        if ($pdo->execute()) {
            return 'Bien';
        } else {
            return 'Error';
        }

        $pdo->close();
    }

    //Borrar Usuario

    public static function BorrarUsuarioM($datosC, $tablaBD)
    {
        $pdo = ConexionBD::cBD()->prepare(
            "DELETE FROM $tablaBD WHERE id = :id"
        );

        $pdo->bindParam(':id', $datosC, PDO::PARAM_INT);

        if ($pdo->execute()) {
            return 'Bien';
        } else {
            return 'Error';
        }

        $pdo->close();
    }
}

?>
