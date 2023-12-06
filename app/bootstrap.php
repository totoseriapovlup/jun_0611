<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $path = '../app/lib/' . $class . '.php';
    if(file_exists($path)){
        include_once $path;
        return true;
    }
    return false;
});

include_once '../app/config.php';

core\Router::init();