<?php

namespace Controllers;

use MVC\Router;
use Model\Evento;
use Model\Usuario;
use Model\Registro;

class DashboardController{

   public static function index(Router $router) {

    $registros = Registro::get(5);

    foreach($registros as $registro){
        $registro->usuario = Usuario::find($registro->usuario_id);
    }

    //calcular los ingresos

    $virtuales = Registro::total('paquete_id', 2);
    $presenciales = Registro::total('paquete_id', 1);

    $ingresos = ($virtuales * 46.41) + ($presenciales * 189.54);

    //Obtener eventos con más y menos lugares disponbles

    $menos_disponibles = Evento::ordenarLimite('disponibles', 'ASC', 3);
    $mas_disponibles = Evento::ordenarLimite('disponibles', 'DESC', 3);

    
        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel de administración',
            'registros' => $registros,
            'ingresos' => $ingresos,
            'menos_disponibles' => $menos_disponibles,
            'mas_disponibles' => $mas_disponibles
        ]);
    }
}