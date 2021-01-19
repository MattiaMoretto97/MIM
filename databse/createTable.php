<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestione_utenti";
 
// Check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE Utenti (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    età INT(6),
    email VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
?>