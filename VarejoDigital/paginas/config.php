<?php


$print = function($class){
    
    if(file_exists('classes/'.$class.'.php')){

        include_once('classes/'.$class.'.php');
    }
};

spl_autoload_register($print);


define('HOST', 'localhost');
define('DATABASE', 'varejo');
define('USER', 'teste');
define('PASSWORD', '1234');

?>
