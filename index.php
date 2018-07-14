<?php

require_once 'vendor/autoload.php';
require_once('controller/Controller.php');


$controller = new Controller();

if(!isset($_GET['action'])) {
    $controller->listServices();
    return;
}

if($_GET['action'] === 'contact') {
    $controller->displayContactForm();
    return;
}
