<?php
$servername = "localhost";
$dsn = 'mysql:dbname=bookique;host=127.0.0.1';
$username = "root";
$password = "";
$dbname = "bookique";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$db = new PDO($dsn, $username, $password);
$query = "SELECT * FROM `libri` 
ORDER BY titolo ASC";

$libri = array();
$sth = $db->query($query);
while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
  $libri[] = $row; 
}
    return $libri;

mysqli_close($conn);

?>