<?php
$message = null;

include_once "products_functions.php";

if(isset($_POST) && $_POST !== []) {
    addMessage($_POST["id"], $_POST);
    $message = getAdvert($_POST['id']);
}

if(isset($_GET) && $_GET !== []) {
    $message = getadvert($_GET['id']);
}