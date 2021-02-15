<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    die();
}
include "../php/listaUtenti.php"
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
                    <a class="nav-link" href="HomeUtente.php" style="color: black;"><u>Home</u></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listsOption.php" style="color: red;">Le Mie Liste</a>
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

    <!-- table -->
    </div>
    <div class="flex justify-start items-left pt-10 ml-4">
        <a href="homeSuperadmin.php"><button class="border-2 border-black text-black font-bold py-2 px-4 rounded">Indietro</button></a>
    </div>
    <div class="flex justify-center items-center">

        <h1 class="pb-14 pt-2 uppercase font-bold">Libri Letti</h1>
    </div>
    <table class="min-w-full leading-normal mb-24">
        <thead>
            <tr>
                <th class="px-5 py-3 border-2 border-black bg-gray-100 text-left text-s font-semibold text-gray-600 uppercase tracking-wider">
                    Cognome
                </th>
                <th class="px-5 py-3 border-2 border-black bg-gray-100 text-left text-s font-semibold text-gray-600 uppercase tracking-wider">
                    Nome
                </th>
                <th class="px-5 py-3 border-2 border-black bg-gray-100 text-left text-s font-semibold text-gray-600 uppercase tracking-wider">
                    email
                </th>
                <th class="px-5 py-3 border-2 border-black bg-gray-100 text-left text-s font-semibold text-gray-600 uppercase tracking-wider">

                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lettori as $index => $lettore) { ?>
                <tr>
                    <td class="px-5 pb-2 pt-4 border-b border-black bg-white text-s">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    <?= $lettore['cognome'] ?>
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 pb-2 pt-4 border-b border-black bg-white text-s">
                        <p class="text-gray-900 whitespace-no-wrap">
                            <?= $lettore['nome'] ?>
                        </p>
                    </td>
                    <td class="px-5 pb-2 pt-4 border-b border-black bg-white text-s">
                        <p class="text-gray-900 whitespace-no-wrap">
                            <?= $lettore['email'] ?>
                        </p>
                    </td>
                    <td class="px-5 pb-3 pt-2 border-b border-black bg-white text-s text-center">
                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight">
                            <a><a href="dettaglioUtente.php?id=<?=$lettore['id']?>"><button class="border-2 border-black font-bold py-2 px-4 rounded" type="submit">👁️</button></a>
                        </span>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>

    <!-- Footer -->
    <footer>
        <div class="text-center p-3  fixed-bottom" style="background-color: black; color:white; margin-top:20px">
            © 2021 Copyright:
            <a class="text-white">Bookique</a>
        </div>
    </footer>

</body>

</html>