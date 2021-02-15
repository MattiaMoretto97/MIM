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
$query = "Select * FROM utenti WHERE idRuolo = 3 ORDER BY cognome ASC";

$caseEditrici = array();
$sth = $db->query($query);
while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
  $caseEditrici[] = $row; 
}
    return $caseEditrici;

mysqli_close($conn);

?>