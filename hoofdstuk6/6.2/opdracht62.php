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
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen"><img src="images/steen.jpg"></div>
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier"><img src="images/papier.jpg"></div>
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar"><img src="images/schaar.jpg"></div>
        </form>
        <?php
            $opties = array("steen","papier","schaar");
            $computerkeuzegetal = rand(0,2);
            $computerkeuze = $opties[$computerkeuzegetal];
            if (isset($_GET['keuze']))
            {
                echo "Jij koos: <img src='images/{$_GET['keuze']}.jpg'>";
                //keuze computer?
            }
            if (isset($_GET['keuze']))
            {
                echo "&nbsp;&nbsp;De computer koos: <img src='images/{$computerkeuze}.jpg'>";
            }

        ?>
    </body>
</html>