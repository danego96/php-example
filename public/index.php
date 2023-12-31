<?php 

define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . '/public');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers'); 
define("VIEWS", APP . '/views');
define("PATH", ROOT . 'http://php-example.test');

require CORE . '/funcs.php';

require CONTROLLERS . '/index.php';