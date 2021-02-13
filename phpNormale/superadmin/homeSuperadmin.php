<?php
session_start();

if (!isset($_SESSION['superadmin'])) {
  header("Location: ../Unauthorized.html");
  die();
}
// echo '<pre>';
// print_r($Libri);
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

  <!-- Card -->

  <main class="py-20">
  <div class="px-14">
    <div class="block md:flex justify-center md:-mx-2">
      <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
        <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <a href="listaLettori.php">
          <img class="h-56 w-full object-contain object-center" src="../img/iconaLettore.png" alt="">
          </a>
          <div class="p-4 h-auto md:h-40 lg:h-48">
            <a class="block text-black hover:no-underline hover:text-black font-semibold mb-2 text-lg md:text-base lg:text-lg text-center">
              Lettori
            </a>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
        <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <a href="listaCaseEditrici.php">
          <img class="h-56 w-full object-contain object-center" src="../img/iconaCasaEditrice.png" alt="">
          </a>
          <div class="p-4 h-auto md:h-40 lg:h-48">
            <a class="block text-black hover:no-underline hover:text-black font-semibold mb-2 text-lg md:text-base lg:text-lg text-center">
              Case editrici
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

  <!-- Footer -->
  <footer>
    <div class="text-center p-3 fixed-bottom" style="background-color: black; color:white; margin-bottom:0px">
      © 2021 Copyright:
      <a class="text-white">Bookique</a>
    </div>
  </footer>


</body>

</html>