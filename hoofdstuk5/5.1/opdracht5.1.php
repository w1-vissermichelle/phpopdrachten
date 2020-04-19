<?php
/**
 * User: Michelle Visser
 * Date: 01-04-2020
 * Time: 14:38
 * File: opdracht5.1.php
 */
?>

<html>
    <head>
        <title>
            PHP opdrachten
        </title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="stylesheet"  type="text/css" href="style.css">
    </head>
    <body>
        <h1>
            Restaria Kees Kroket
        </h1>
        <p>
            Visstraat 12<br>
            5211 DN 's-Hertogenbosch<br>
            073 613 6720<br>
            info@restariakeeskroket.nl
        </p>
        <form action="form_data.php" method="get">
            <p>
                Bedrijfsnaam
            </p>
            <input type="text" name="companyName">
            <p>
                Voornaam
            </p>
            <input type="text" name="firstName">
            <br>
            <p>
                Achternaam
            </p>
            <input type="text" name="lastName">
            <p>
                Telefoon
            </p>
            <input type="tel" name="telephone">
            <p>
                E-mail
            </p>
            <input type="email" name="email">
            <p>
                Bericht
            </p>
            <input type="text" name="message">
            <br><br>
            <input type="submit" value="Versturen">
        </form>
    </body>
</html>