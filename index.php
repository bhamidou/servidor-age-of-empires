<?php


header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];

$v = explode('/', $paths) ;

unset($v[0]);

$cod = 200;
$mes = "todo bien";


if($requestMethod == 'GET'){

}else if($requestMethod == 'POST'){
    

}else {
    $cod = 405;
    $mes = "method invalid";
    
}


header("HTTP/1.1 $cod $mes");