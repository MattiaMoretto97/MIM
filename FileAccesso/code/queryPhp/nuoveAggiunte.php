<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookique";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = [];
    $stmt = $conn->query("SELECT * FROM user");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }
    echo json_encode($result);

mysqli_close($conn);

?>