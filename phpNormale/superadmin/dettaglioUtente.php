<?php
session_start();

if (!isset($_SESSION['superadmin'])) {
  header("Location: ../Unauthorized.html");
  die();
}
include "../php/connection.php";

$db = new PDO($dsn, $username, $password);
$id = (int) $_GET['id'];

$query = "Select * FROM utenti WHERE id = $id";

$utente = array();
$sth = $db->query($query);
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
  $utente[] = $row;
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Superadmin</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/custom/navbarCss.css">
  <link rel="stylesheet" href="../css/custom/searchBar.css">
  <link rel="stylesheet" href="../css/custom/scrollbarX.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg border border-dark ">
    <!-- Image and text -->
    <nav class="navbar">
      <div class="d-flex justify-content-start" id="NavBarLogo">
        <a class="navbar-brand" href="#">
          <img src="../img/logo.png" width="150" height="50" class="d-inline-block align-top" alt="">
        </a>
      </div>
    </nav>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="homeUtente.php" style="color: red ;"><u>Home</u></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;">Lista Libri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;">Aggiungi libro</a>
        </li>
      </ul>
    </div>
    <div class="d-flex justify-content-end">
      <a href="#" data-toggle="modal" data-target="#exampleModal">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle icon" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>
      </a>
      <a class="btn" style="margin-top:5px; margin-bottom:5px" href="../php/logout.php">Logout</a>
    </div>
  </nav>

  <div class="flex justify-start items-left pt-2 ml-2">
    <a href="listaLettori.php"><button class="border-2 border-black text-black font-bold py-2 px-4 rounded">Indietro</button></a>
  </div>

  <div class="pt-4 h-screen  px-2">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md border-2 border-black">
      <div class="md:flex">
        <div class="w-full p-3 px-6 py-10">
          <div class="text-center"> <span class="text-xl text-black">Dettaglio utente</span> </div>
          <form method="POST" action="../php/modificaUtente.php?id=<?= $id ?>">
            <div class="mt-3 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-red-500">Cognome</span> <input type="text" id="cognome" name="cognome" value="<?php print_r($utente['0']['cognome']); ?>" class="h-12 px-2 w-full border-2 border-black rounded focus:outline-none focus:border-red-600 text-center"> </div>
            <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-red-500 ">Nome</span> <input type="text" id="nome" name="nome" value="<?php print_r($utente['0']['nome']); ?>" class="h-12 px-2 w-full border-2 border-black rounded focus:outline-none focus:border-red-600 text-center"> </div>
            <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-red-500 ">Email</span> <input type="text" id="email" name="email" value="<?php print_r($utente['0']['email']); ?>" class="h-12 px-2 w-full border-2 border-black rounded focus:outline-none focus:border-red-600 text-center"> </div>
            <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-red-500 ">CF</span> <input type="text" id="cf" name="cf" value="<?php print_r($utente['0']['cf']); ?>" class="h-12 px-2 w-full border-2 border-black rounded focus:outline-none focus:border-red-600 text-center"> </div>
            <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-red-500">Password</span> <input type="text" id="password" name="password" value="<?php print_r($utente['0']['password']); ?>" class="h-12 px-2 w-full border-2 border-black rounded focus:outline-none focus:border-red-600 text-center"> </div>
            <div class="flex items-center justify-between mt-6">
              <a href="../php/deleteUtente.php?id=<?= $id ?>">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                  Delete
                </button>
              </a>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="submit">
                  Update
                </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="text-center p-3 fixed-bottom" style="background-color: black; color:white; margin-bottom:0px;">
      © 2021 Copyright:
      <a class="text-white">Bookique</a>
    </div>
  </footer>


</body>

</html>