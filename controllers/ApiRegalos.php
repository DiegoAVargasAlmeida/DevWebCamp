<?php

namespace Controllers;

use Model\EventoHorario;
use Model\Regalo;
use Model\Registro;

class ApiRegalos{

   public static function index() {

    if (!is_admin()) {
      header('Location: /login');
      return;
  }
    $regalos = Regalo::all();

      foreach($regalos as $regalo){
        $regalo->total = Registro::totalArray(['regalo_id' => $regalo->id, 'paquete_id' => "1"]);
      }
       

       //consultar la base de datos

       echo json_encode($regalos);
       return;

    }
}