<?php 
/*include('include/config.php');
include('include/connectToServer.php');
include('include/connectToDatabase.php');
include('include/createTables.php');
*/
require_once "router.php";
include "about.php";


$route = new Route();

$route->add('/', new About());
$route->add('/about', new About());
$route->add('/contact', new About());

echo '<pre>';
print_r($route);

$route->submit();

 ?>
