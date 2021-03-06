<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>bookique</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom/mainlogin.css">
        <link rel="icon" href="img/logo.png">
    </head>
    <body>
        <div class="d-flex  bd-highlight">
            <div class="p-2 flex-fill bd-highlight">
                    <a href="registration.php"><button class="bottone-superiore-dx">REGISTRATI</button></a>
                    <a href="login.php"><button class="bottone-superiore-sx">LOGIN</button><br/></a>
                    <section class="paragrafo">
                        <h1>Log In</h1>
                        <p>bentornato <br/> Per favore, accedi al tuo account</p> <br/>
                    </section>
                    <form class="pulsanti-inserimento" method="POST" action="php/login.php">
                        <label for="fname"></label>
                        <input type="text" id="password" name="email" placeholder="email" required><br>
                        <label for="lname"></label>
                        <input type="password" id="password" name="password" placeholder="password" required><br>                       
                    
                    <!-- <form class="checkbox">
                        <section  class="checkbox" title="checkbox">
                        <input type="checkbox" value="None" id="squaredFour" name="check" />
                        <label for="squaredFour">Ricordami  <a href="#">Password dimenticata?</a></label> 
                        </section>
                    </form> -->
                    <div class="container">
                    <div class=" col-sm-12 text-center">
                        <button class="bottone-inferiore" type="submit" value="submit">ACCEDI</button>
                    </div>
                    </div>
                    </form>
            </div>
            <div class="p-2 flex-fill bd-highlight">
                    <figure class="ml-auto p-2">
                         <img class="img-responsive" src="img/img.jpeg" alt="img-bookique">
                    </figure>
            </div>
        </div>
        
        <script  type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>