<?php 
/*include('include/config.php');
include('include/connectToServer.php');
include('include/connectToDatabase.php');
include('include/createTables.php');
*/
require_once "router.php";


$route = new Route();

$route->add('/');
$route->add('/about');
$route->add('/contact');

echo '<pre>';
print_r($route);

$route->submit();

 ?>
