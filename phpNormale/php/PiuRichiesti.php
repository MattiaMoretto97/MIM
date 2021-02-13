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
$query = "SELECT *, COUNT(idLibro)AS desiderato,Titolo FROM `desiderati` 
INNER JOIN libri 
ON desiderati.idLibro = libri.id 
WHERE nascondi=1 
GROUP BY Titolo 
ORDER BY desiderato DESC LIMIT 10";

$libriRichiesti = array();
$sth = $db->query($query);
while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
  $libriRichiesti[] = $row; 
}
  

mysqli_close($conn);

?>