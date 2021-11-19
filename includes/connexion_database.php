<?php
function connexion() {
    $bdd = null;
    
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=id17975542_wf3_php_intermediaire_audrey',
            'id17975542_admin',
            'SUTsut596596!',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
    } catch (Exception $e) {
        die($e->getMessage());
    }

    return $bdd;
}