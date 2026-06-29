<?php
class Router {

    public function run () {

        $controller = $_GET["controller"] ?? "user";
        $action = $_GET["action"] ?? "index";

        $controllerName=ucfirst($controller) . "Controller";
        
        $controllerFile = __DIR__ . "/../controllers/" . $controllerName . ".php";

        if (!file_exists($controllerFile)) {
            die ("Controleur introuvable");
        }
        
        require_once $controllerFile; 

        $controllerObject = new $controllerName();

        if(!method_exists($controllerObject, $action)) {
            die("Action inexistante");
        }
        $controllerObject->$action();
    }
}


?>