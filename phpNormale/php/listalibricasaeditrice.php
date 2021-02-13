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

$cognome = $_SESSION['user']['cognome'];

$db = new PDO($dsn, $username, $password);
$query = "Select * FROM libri WHERE casaEditrice = '".$cognome."' ORDER BY titolo ASC";

$libriNuovi = array();
$sth = $db->query($query);
while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
  $libriNuovi[] = $row; 
}

mysqli_close($conn);

?>