<?php
include('include/config.php');
 
$sql = [ 
    "CREATE TABLE ruoli (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL
    );",
    "CREATE TABLE utenti (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL,
        cognome VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        cf VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        idRuolo INT(6) UNSIGNED NOT NULL,
            FOREIGN KEY (idRuolo) REFERENCES ruoli(id)
    );",
    "CREATE TABLE libri (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        titolo VARCHAR(30) NOT NULL,
        autore VARCHAR(30) NOT NULL,
        categoria VARCHAR(30) NOT NULL,
        tipologia VARCHAR(30) NOT NULL,
        isbn VARCHAR(30) NOT NULL,
        casaEditrice VARCHAR(30) NOT NULL,
        nascondi BOOLEAN NOT NULL
    );",
    "CREATE TABLE desiderati (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        idUtente INT(6) UNSIGNED NOT NULL,
        idLibro INT(6) UNSIGNED NOT NULL,
            FOREIGN KEY (idUtente) REFERENCES utenti(id),
            FOREIGN KEY (idLibro) REFERENCES libri(id)
    );",
    "CREATE TABLE letti (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        idUtente INT(6) UNSIGNED NOT NULL,
        idLibro INT(6) UNSIGNED NOT NULL,
            FOREIGN KEY (idUtente) REFERENCES utenti(id),
            FOREIGN KEY (idLibro) REFERENCES libri(id)
    );"
];

for ($i = 0; $i < count($sql); $i++) {
    if (empty(mysqli_query($conn, $sql[$i]))) {
        mysqli_query($conn, $sql[$i]);
        //echo "Table created successfully! <br>";
    } else {
        echo "Error creating tables: " . $conn->error . "<br>";
    }
}
    
$conn->close();
?>