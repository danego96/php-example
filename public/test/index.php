<?php

//require_once 'app/A.php';
//require_once 'classes/A.php';

/* spl_autoload_register(function($class){
    $filename =  str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    require_once $filename;
//var_dump("app/{$class}.php");
}); */
require __DIR__ . '/vendor/autoload.php';

new app\A();
new base\A();