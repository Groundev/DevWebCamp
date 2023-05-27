<?php

namespace Controllers;

use Model\Ponente;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class PonentesController {

    public static function index(Router $router){
        $ponentes = Ponente::all();
        
        $router->render('admin/ponentes/index', [
            'titulo' => 'Ponentes de la Conferencia',
            'ponentes' => $ponentes
        ]);
    }
    public static function crear(Router $router){
        $alertas = [];
        $ponente = new Ponente;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Leer Imagen
            if(!empty($_FILES['imagen']['tmp_name'])){
                $carpeta_imagenes = '../public/img/speakers';

                // Crear La Carpeta si no existe
                if(!is_dir($carpeta_imagenes)){
                    mkdir($carpeta_imagenes, 0755, true);
                }

                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80);

                $nombre_imagen = md5(uniqid(rand(), true));

                $_POST['imagen'] = $nombre_imagen;
            }
            $_POST['redes'] = json_encode($_POST['redes'], JSON_UNESCAPED_SLASHES);
            $ponente->sincronizar($_POST);

            // Validar
            $alertas = $ponente->validar();

            // Guardar el registro
            if(empty($alertas)){

                // Guardar las imagenes
                $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . 'png');
                $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . 'webp');

                // Guardar en la base de Datos
                $resultado = $ponente->guardar();
                if($resultado){
                    header('Location: /admin/ponentes');
                }

            }
        }
        $router->render('admin/ponentes/crear', [
            'titulo' => 'Registrar Ponentes',
            'alertas' => $alertas,
            'ponente' => $ponente
        ]);
    }
    public static function editar(Router $router){
        $alertas = [];
        //Validar el Id
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id){
            header('Location: /admin/ponentes');
        }
        // Obtener ponente a editar 
        $ponente = Ponente::find($id);

        if(!$ponente){
            header('Location: /admin/ponentes');
        }
        // Variabel Temporal
        $ponente->imagen_actual = $ponente->imagen;

        

        $router->render('admin/ponentes/editar', [
            'titulo' => 'Actualizar Ponentes',
            'alertas' => $alertas,
            'ponente' => $ponente
        ]);
    }
}