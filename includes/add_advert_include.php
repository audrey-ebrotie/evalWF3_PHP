<?php

include_once "adverts_functions.php";

if(isset($_POST) && $_POST !== []) {
    addAdvert($_POST);
}