<?php
$servername = "localhost";
$dsn = 'mysql:dbname=bookique;host=127.0.0.1';
$username = "root";
$password = "root";
$dbname = "bookique";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$db = new PDO($dsn, $username, $password);
$query = "Select * FROM libri WHERE nascondi=1 ORDER BY rand() DESC LIMIT 30";

$libriRandom = array();
$sth = $db->query($query);
while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
  $libriRandom[] = $row; 
}
    return $libriRandom;

mysqli_close($conn);

?>