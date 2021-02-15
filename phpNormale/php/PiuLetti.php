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
$query = "SELECT *, COUNT(idLibro)AS volte_letto,Titolo FROM `letti` 
INNER JOIN libri 
ON letti.idLibro = libri.id 
WHERE nascondi=1 
GROUP BY Titolo 
ORDER BY volte_letto DESC LIMIT 10";

$libriLetti = array();
$sth = $db->query($query);
while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
  $libriLetti[] = $row; 
}
    return $libriLetti;

mysqli_close($conn);

?>