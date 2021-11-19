<?php
function connexion() {
    $bdd = null;
    
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=wf3_php_intermediaire_audrey;charset=utf8',
            'root',
            'root',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
    } catch (Exception $e) {
        die($e->getMessage());
    }

    return $bdd;
}