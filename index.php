<?php

/* require_once "Pessoas.php";

$pessoa = new Pessoas();

$pessoa-> setNome('Vinicius');
$pessoa-> setIdade(21);

var_dump($pessoa);
 */

$controller = key($_GET);
$controller.= "Controller";

require_once "controller/$controller.php";

$obj = new $controller();

$obj->view($_SERVER["REQUEST_METHOD"]);

//var_dump($controller);


?>