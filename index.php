<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

$self = $_SERVER['PHP_SELF'];
$junk = str_replace('index.php', '', $self);

$uri = str_replace($junk, '', $_SERVER['REQUEST_URI']);
$uriInfo = explode('/', $uri);

$controllerName = array_shift($uriInfo);
$fullControllerName = 'Controllers\\' . ucfirst($controllerName) . 'Controller';

if (!class_exists($fullControllerName)) {
    http_response_code(404);
    echo "<h1> 404 Not Found </h1>";
    exit;
}

$controllerInstance = new $fullControllerName();

$methodName = array_shift($uriInfo);

if (method_exists($controllerInstance, $methodName)) {
    call_user_func_array([$controllerInstance, $methodName], $uriInfo);
} else {
    http_response_code(404);
    echo "<h1> 404 Not Found </h1>";
}

