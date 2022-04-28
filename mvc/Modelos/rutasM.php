<?php

class Modelo
{
    public static function RutasModelo($rutas)
    {
        if (
            $rutas == 'ingreso' ||
            $rutas == 'registrar' ||
            $rutas == 'usuarios' ||
            $rutas == 'editar' ||
            $rutas == 'salir'
        ) {
            $pagina = 'Vistas/modulos/' . $rutas . '.php';
        } elseif ($rutas == 'index') {
            $pagina = 'Vistas/modulos/ingreso.php';
        } else {
            $pagina = 'Vistas/modulos/ingreso.php';
        }

        return $pagina;
    }
}
