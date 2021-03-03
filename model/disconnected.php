<?php
class Disconnected {
    public function disconnect()
    {
        unset($_SESSION['is_connect']);
        unset($_SESSION['id']);
        unset($_SESSION['pseudo']);
        unset($_SESSION['email']);
        header('Location:'.$_SERVER['PHP_SELF']);
    } 
}