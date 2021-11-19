<?php
session_start();

include_once 'adverts_functions.php';

$advert = getAdvert($_GET['id']);