<?php

// Le check pour le / est censé être dans ce fichier

define('PATH_DIR', 'http://localhost:8080/WebAvancee/tp2/');
require_once('controller/Controller.php');
require_once('library/RequirePage.php');
require_once __DIR__.'/vendor/autoload.php';
require_once('library/Twig.php');


$url = isset($_GET['url'])? explode('/', ltrim($_GET['url'], '/')) : '/';

//Si il n'y a pas de controller, method ou value, va à home
if($url == '/'){
    require_once('controller/ControllerHome.php');
    $controller = new ControllerHome;
    echo $controller->index();
}else{

    //controller
    $requestURL = $url[0];
    $requestURL = ucfirst($requestURL);
    $controllerPath = __DIR__."/controller/Controller".$requestURL.".php";
    
    if(file_exists($controllerPath)){
        require_once( $controllerPath);
        $controllerName = 'Controller'.$requestURL;
        $controller = new $controllerName;
        if(isset($url[1])){
            $method = $url[1];
            if(isset($url[2])){

                if (!is_numeric($url[2])) {
                    RequirePage::url('home/error/404');
                }
                echo $controller->$method($url[2]);

            }else{
                /**
                * Check si la méthode fini avec un / un id (à l'exception de create). Si non, va où le controller pointe
                */
                if ($url[1] != "create" && $url[1] != "store") {
                    if (!$url[2]) {
                        RequirePage::url('home/error/404');
                    }
                }
                echo $controller->$method();
            }
        }else{
            echo $controller->index();
        }
        

    }else{
        require_once('controller/ControllerHome.php');
        $controller = new ControllerHome;
        echo $controller->error('404'); 
    }
}