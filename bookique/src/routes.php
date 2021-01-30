<?php

include "src/controllers/home-controller.php";
include "src/controllers/contact-controller.php";
include "src/controllers/login-controller.php";
include "src/controllers/registration-controller.php";


$router = new Route();

$router->add('/', 'Home');
$router->add('login', 'Login');
$router->add('registration', 'Registration');
$router->add('/about', 'About');
$router->add('/contact', 'Contact');


$router->submit();

?>