<?php
session_start();

require 'model/autoload.php';
$autoload = new Autoload;
$autoload->Autoloading();

require 'controller/controller.php';

var_dump($_SESSION);


