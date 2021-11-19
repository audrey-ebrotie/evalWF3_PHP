<?php
require_once "connexion_database.php";

function addAdvert(array $datasAdvert) {
    $bdd = connexion();

    $query = $bdd->prepare("INSERT INTO adverts (title, description, zipcode, city, type, price, reservation_message) VALUES (:title, :description, :zipcode, :city, :type, :price, :message)");

    $response = $query->execute($datasAdvert) or die(print_r($bdd->errorInfo()));

    return $response;
}

function getAdverts() {
    $bdd = connexion();
    $query = $bdd->query("SELECT * FROM adverts ORDER BY id");

    $response = $query->fetchAll();

    $query->closeCursor();

    return $response;
}

function getAdvert(int $id) {
    $bdd = connexion();
    $query = $bdd->prepare("SELECT * FROM adverts WHERE id=:id");

    $response = $query->execute([ 'id' => $id]) or die(print_r($bdd->errorInfo()));

    $result = $query->fetch();

    $query->closeCursor();

    return $result;
}

function addMessage(int $id, array $advertsDatas) {
    $bdd = connexion();

    $query = "UPDATE adverts SET reservation_message = :message";

    $response = $query->execute($arrayDatas) or die(print_r($bdd->errorInfo()));

    return $response;
}
