<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../Redirect.html");
    die();
}

include "../php/nuoveAggiunte.php";
#include "../php/PiuLetti.php";
#include "../php/PiuRichiesti.php";
#include "../php/libriRandom.php";
// echo '<pre>';
// print_r($Libri);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Utente</title>
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
                    <a class="nav-link" href="HomeUtente.php" style="color: red ;"><u>Home</u></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: black;">Miei Libri</a>
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

    <!-- Search Bar -->
    <div class="md:flex md:justify-center sm:justify-none my-5">
        <div
          class="flex md:justify-center sm:justify-start search-bar  relative md:w-6/12 sm:w-1"
        >
          <input
            class="w-full  py-3 px-10 rounded-3xl md:pl-40 pl-28 border-2 border-red-600 focus:outline-none"
            placeholder="Scopri nuovi libri!"
            type="text"
            id="search"
          />
          <select
            id="category"
            class="absolute lg:left-6 md:left-6 left-2 md:mt-3 mt-3 rounded-2xl border-2 border-red-600 focus:outline-none"
          >
            <option value="titolo">Titolo</option>
            <option value="autore">Autore</option>
            <option value="casaEditrice">Casa Editrice</option>
            <option value="ISB">ISB</option>
          </select>
          <button
            id="btn-search"
            class="absolute right-6 focus:outline-none"
            style="top: 25%"
          >
          <svg class="h-8 w-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
          </button>
        </div>
      </div>

    <!-- Nuove Aggiunte -->
    <div>
        <h2 style="margin: 50px;">Nuove aggiunte</h2>
    </div>
    <section class="content mx-5">

        <div class="scrolling-wrapper">
            <?php foreach ($libriNuovi as $libro) { ?>
                <div class="my-1 px-1 w-full md:w-1/5 lg:my-4 lg:px-4 lg:w-1/5 sm:1/ inline-block">
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full" src="../img/libro.jpg">
                        </a>

                        <header class="text-center">
                            <h1 class="text-sm">
                                <a class="no-underline text-black content-center"  href="#">
                                    <?= $libro["titolo"] ?>
                                </a>
                            </h1>
                            <h1 class="text-sm">
                                <a class="no-underline hover:no-underline hover:text-black text-black content-center"  href="#">
                                    <?= $libro["casaEditrice"] ?>
                                </a>
                            </h1>
                            <button class="bg-red-800 hover:bg-red-900 text-white font-bold py-2 px-4 mb-4 mt-2 rounded">
                                Vedi dettaglio
                            </button>
                        </header>
                    </article>
                </div>
            <?php }; ?>
        </div>
    </section>

    <!-- Più richiesti -->
    <div>
        <h2 style="margin: 50px;">Più richiesti</h2>
    </div>
    <section class="content mx-5">

        <div class="scrolling-wrapper">
            <?php foreach ($libriRichiesti as $libro) { ?>
                <div class="my-1 px-1 w-full md:w-1/5 lg:my-4 lg:px-4 lg:w-1/5 sm:1/ inline-block">
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full" src="../img/libro.jpg">
                        </a>

                        <header class="text-center">
                            <h1 class="text-sm">
                                <a class="no-underline text-black content-center"  href="#">
                                    <?= $libro["titolo"] ?>
                                </a>
                            </h1>
                            <h1 class="text-sm">
                                <a class="no-underline hover:no-underline hover:text-black text-black content-center"  href="#">
                                    <?= $libro["casaEditrice"] ?>
                                </a>
                            </h1>
                            <button class="bg-red-800 hover:bg-red-900 text-white font-bold py-2 px-4 mb-4 mt-2 rounded">
                                Vedi dettaglio
                            </button>
                        </header>
                    </article>
                </div>
            <?php }; ?>
        </div>
    </section>

    <!-- Più letti -->
    <div>
        <h2 style="margin: 50px;">Più letti</h2>
    </div>
    <section class="content mx-5">

        <div class="scrolling-wrapper">
            <?php foreach ($libriLetti as $libro) { ?>
                <div class="my-1 px-1 w-full md:w-1/5 lg:my-4 lg:px-4 lg:w-1/5 sm:1/ inline-block">
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full" src="../img/libro.jpg">
                        </a>

                        <header class="text-center">
                            <h1 class="text-sm">
                                <a class="no-underline text-black content-center"  href="#">
                                    <?= $libro["titolo"] ?>
                                </a>
                            </h1>
                            <h1 class="text-sm">
                                <a class="no-underline hover:no-underline hover:text-black text-black content-center"  href="#">
                                    <?= $libro["casaEditrice"] ?>
                                </a>
                            </h1>
                            <button class="bg-red-800 hover:bg-red-900 text-white font-bold py-2 px-4 mb-4 mt-2 rounded">
                                Vedi dettaglio
                            </button>
                        </header>
                    </article>
                </div>
            <?php }; ?>
        </div>
    </section>

    <!-- Lista libri -->
    <div>
        <h2 style="margin: 50px;">Lista libri</h2>
    </div>
    <section class="content mx-5">

        <div class="scrolling-wrapper">
            <?php foreach ($libriRandom as $libro) { ?>
                <div class="my-1 px-1 w-full md:w-1/5 lg:my-4 lg:px-4 lg:w-1/5 sm:1/ inline-block">
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full" src="../img/libro.jpg">
                        </a>

                        <header class="text-center">
                            <h1 class="text-sm">
                                <a class="no-underline text-black content-center"  href="#">
                                    <?= $libro["titolo"] ?>
                                </a>
                            </h1>
                            <h1 class="text-sm">
                                <a class="no-underline hover:no-underline hover:text-black text-black content-center"  href="#">
                                    <?= $libro["casaEditrice"] ?>
                                </a>
                            </h1>
                            <button class="bg-red-800 hover:bg-red-900 text-white font-bold py-2 px-4 mb-4 mt-2 rounded">
                                Vedi dettaglio
                            </button>
                        </header>
                    </article>
                </div>
            <?php }; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="text-center p-3" style="background-color: black; color:white">
            © 2021 Copyright:
            <a class="text-white">Bookique</a>
        </div>
    </footer>
    
    <!-- Modal password -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">conferma password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" id="oldPassword" name="lname" placeholder="password"><br>
                        <label for="fname"></label>
                        <input type="text" id="newPassword" name="fname" placeholder="nuova password"><br>
                        <label for="lname"></label>
                        <input type="text" id="confirmPassword" name="fname" placeholder="conferma password"><br>
                        <label for="lname"></label>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">INVIA</button>
                </div>
            </div>
        </div>
    </div>

   

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>

</body>

</html>