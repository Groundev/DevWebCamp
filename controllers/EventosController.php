<?php

namespace Controllers;

use MVC\Router;

class EventosController {

    public static function index(Router $router){
        $router->render('admin/eventos/index', [
            'titulo' => 'Calendario de Conferencias y WorkShops'
        ]);
    }
}