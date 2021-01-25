<?php 
/*include('include/config.php');
include('include/connectToServer.php');
include('include/connectToDatabase.php');
include('include/createTables.php');
*/
include "router.php";
include "src/home.php";
include "src/about.php";
include "src/contact.php";



$route = new Route();

$route->add('/',function() {
    echo 'Ehi questa è la home';
});
$route->add('/about', 'About');
$route->add('/contact', 'Contact');

//echo '<pre>';
//print_r($route);

$route->submit();

 ?>
