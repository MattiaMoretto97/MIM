<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookique";
 
// Check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 
    "CREATE TABLE Ruoli (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL,
    )";
    
    "CREATE TABLE Utenti (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL,
        cognome VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        cf VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        idRuolo INT(6) UNSIGNED NOT NULL,
            FOREIGN KEY (idRuolo) REFERENCES Ruoli(id)
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
?>