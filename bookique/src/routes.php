<?php

include "app/controllers/contact.php";


$router = new Route();

$router->add('/',function() {
    echo 'Ehi questa è la home';
});
$router->add('/about', 'About');
$router->add('/contact', 'Contact');


$router->submit();

?>