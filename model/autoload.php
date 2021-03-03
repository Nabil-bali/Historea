<?php
class Autoload {
    public function Autoloading()
    {
        spl_autoload_register(function($className){

            require_once "model/$className.php";
        
        });
    }
}