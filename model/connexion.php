<?php
class Connexion extends Urls{
    protected function connect() {
        // modiier le port lorsque nécessaire, ex : %;port=3308;%
        $bdd = new PDO('mysql:host=localhost;dbname=historea;charset=UTF8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		return $bdd;
    }
}