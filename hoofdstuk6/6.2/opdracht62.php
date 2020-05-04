<?php
/**
 * User: Michelle Visser
 * Date: 04-05-2020
 * Time: 20:21
 * File: opdracht62.php
 */
?>
<html>
    <head>
        <title>
            Steen, papier, schaar
        </title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
        <form id="gameFrm" method="get" action="opdracht62.php">
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen"><img src="images/steen.jpg" alt="steen"></div>
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier"><img src="images/papier.jpg" alt="papier"></div>
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar"><img src="images/schaar.jpg" alt="schaar"></div>
        </form>
        <?php
            //Variablen declareren en initialiseren
            $opties = array("steen","papier","schaar");
            $computerkeuzegetal = rand(0,2);
            $computerkeuze = $opties[$computerkeuzegetal];
            $_SESSION['user1'] = 0;
            $_SESSION['user2'] = 0;

            //De keuze van de speler laten zien
            if (isset($_GET['keuze']))
            {
                echo "U koos: <img src='images/{$_GET['keuze']}.jpg'>";
                session_start();
            }

            //De keuze van de computer laten zien
            if (isset($_GET['keuze']))
            {
                echo "&nbsp;&nbsp;De computer koos: <img src='images/{$computerkeuze}.jpg'>";
            }

            //Laten zien wie er wint
            if($_GET['keuze'] == $computerkeuze)
            {
                //Met gelijke keuzes wint niemand
                echo "<br>U heeft gelijk gespeeld";
            }
            elseif($_GET['keuze'] == "schaar" && $computerkeuze == $opties[1] || $_GET['keuze'] == "steen" && $computerkeuze == $opties[2] || $_GET['keuze'] == "papier" && $computerkeuze == $opties[0])
            {
                //Schaar wint van papier, steen wint van schaar, papier wint van steen
                echo "<br>U wint";
                $_SESSION['user1'] +=1;
            }
            elseif($_GET['keuze'] == "papier" && $computerkeuze == $opties[2] || $_GET['keuze'] == "schaar" && $computerkeuze == $opties[0] || $_GET['keuze'] == "steen" && $computerkeuze == $opties[1])
            {
                echo "<br>De computer wint";
                $_SESSION['user2'] +=1;
            }

            echo "<br>De score is " . $_SESSION['user2'] . " voor de computer en " . $_SESSION['user1'] . " voor u.";

            if($_SESSION['user2'] >= 5 || $_SESSION['user1'] >= 5)
            {
                echo "<br>Er is een winnaar! Maak een nieuwe keuze om een nieuw spel te starten";
                session_destroy();
            }
        ?>
    </body>
</html>