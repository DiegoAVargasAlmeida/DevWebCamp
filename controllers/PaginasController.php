<?php

namespace Controllers;

use Model\Dia;
use Model\Hora;
use MVC\Router;
use Model\Evento;
use Model\Ponente;
use Model\Categoria;

class PaginasController {

    public static function index(Router $router) {

        $eventos = Evento::ordenar('hora_id', 'ASC');
        $eventos_formateados = [];

        foreach($eventos as $evento){

                $evento->categoria = Categoria::find($evento->categoria_id);
                $evento->dia = Dia::find($evento->dia_id);
                $evento->hora = Hora::find($evento->hora_id);
                $evento->ponente = Ponente::find($evento->ponente_id);
                
                if ($evento->dia_id === "1" && $evento->categoria_id === "1") {
                        $eventos_formateados['conferencias_v'][] = $evento;
                }
        }

        foreach($eventos as $evento){
                if ($evento->dia_id === "2" && $evento->categoria_id === "1") {
                        $eventos_formateados['conferencias_s'][] = $evento;
                }
        }

        foreach($eventos as $evento){
                if ($evento->dia_id === "1" && $evento->categoria_id === "2") {
                        $eventos_formateados['workshops_v'][] = $evento;
                }
        }

        foreach($eventos as $evento){
                if ($evento->dia_id === "2" && $evento->categoria_id === "2") {
                        $eventos_formateados['workshops_s'][] = $evento;
                }
        }


        //total de cada bloque

        $ponentes_total = Ponente::total();
        $conferencias_total = Evento::total('categoria_id', 1);
        $workshops_total = Evento::total('categoria_id', 2);

        
        //Obtener todos los ponentes

        $ponentes = Ponente::all();


            $router->render('paginas/index', [
                    'titulo' => 'Workshops & Conferencias',
                    'eventos' => $eventos_formateados,
                    'ponentes_total' => $ponentes_total,
                    'conferencias_total' => $conferencias_total,
                    'workshops_total' => $workshops_total,
                    'ponentes' => $ponentes,      
               
                ]);
    }

    public static function devwebcamp(Router $router) {

     
            $router->render('paginas/devwebcamp', [
                    'titulo' => 'Sobre DevWebCamp',
               
                ]);
    }

    public static function paquetes(Router $router) {

      

            $router->render('paginas/paquetes', [
                    'titulo' => 'Paquetes DevWebcamp',
                  
                ]);
    }

    public static function conferencias(Router $router) {

        $eventos = Evento::ordenar('hora_id', 'ASC');
        $eventos_formateados = [];

        foreach($eventos as $evento){

                $evento->categoria = Categoria::find($evento->categoria_id);
                $evento->dia = Dia::find($evento->dia_id);
                $evento->hora = Hora::find($evento->hora_id);
                $evento->ponente = Ponente::find($evento->ponente_id);
                
                if ($evento->dia_id === "1" && $evento->categoria_id === "1") {
                        $eventos_formateados['conferencias_v'][] = $evento;
                }
        }

        foreach($eventos as $evento){
                if ($evento->dia_id === "2" && $evento->categoria_id === "1") {
                        $eventos_formateados['conferencias_s'][] = $evento;
                }
        }

        foreach($eventos as $evento){
                if ($evento->dia_id === "1" && $evento->categoria_id === "2") {
                        $eventos_formateados['workshops_v'][] = $evento;
                }
        }

        foreach($eventos as $evento){
                if ($evento->dia_id === "2" && $evento->categoria_id === "2") {
                        $eventos_formateados['workshops_s'][] = $evento;
                }
        }
            $router->render('paginas/workshops-conferencias', [
                    'titulo' => 'Conferencias & Workshops',
                    'eventos' => $eventos_formateados
                    
                ]);
    }
    
    public static function error(Router $router) {

      

        $router->render('paginas/error', [
                'titulo' => 'Pagina no encontrada',
              
            ]);
}


public static function eventoinfo(Router $router) {

       

        $id = $_GET['id'];

        $evento = Evento::find($id);
        $categoria = $evento->ponente = Categoria::find($evento->categoria_id);
        $ponente=  $evento->ponente = Ponente::find($evento->ponente_id);
        
//debuguear($ponente);
        
       // debuguear(substr($categoria->nombre,0,-1));

      //str_replace( "s", '', $evento->categoria->nombre)

        $router->render('paginas/eventoinfo', [
                'titulo' => 'Información sobre el Evento',
                'evento' =>$evento,
                'ponente' => $ponente,
                'categoria' => $categoria
 
              
            ]);
}
}