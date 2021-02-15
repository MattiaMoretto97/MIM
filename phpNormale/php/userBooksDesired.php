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

session_start();

$user_id = $_SESSION['user']['id'];

$db = new PDO($dsn, $username, $password);

$query = " 
  SELECT * FROM desiderati 
  INNER JOIN libri 
  ON desiderati.idLibro = libri.id
  WHERE idUtente = '".$user_id."'
  ORDER BY titolo ASC;
  ";

$booksDesired = array();
$sth = $db->query($query);
while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
  $booksDesired[] = $row; 
}
    return $booksDesired;

mysqli_close($conn);

//header("Location: ../lettore/homeUtente.php");

?>