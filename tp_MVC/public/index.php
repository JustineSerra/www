<?php 
require_once __DIR__ . "../app/Core/Router.php";

$router= new Router();
$router->run();

require_once __DIR__ . "/index.php"

?>