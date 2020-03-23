<?php
/**
 * User: Michelle Visser
 * Date: 17-02-2020
 * Time: 14:11
 * File: index.php
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
    <link rel="stylesheet"  type="text/css" href="css/style.css">
</head>
<body>
<?php
$evenement = "Elfstedentocht";
$vertaling = "Alvestêdetocht";
$afstand = 200;
$soort = "schaatstocht";
$ijs = "natuurijs";
$organisator = "Koninklijke Vereniging De Friesche Elf Steden";
$startEindLocatie = "Leeuwarden";
$locatie = "Friesland";
$aantalGereden = 15;
$eersteGereden = 1909;
$maximaalGereden = 1;
$verhaal = "De Elfstedentocht (Fries: Alvestêdetocht) is een 200 kilometer lange schaatstocht over natuurijs die wordt georganiseerd door de Koninklijke Vereniging De Friesche Elf Steden. Leeuwarden, de hoofdstad van Friesland, is start- en aankomstplaats. De Elfstedentocht is inmiddels 15 maal verreden en werd voor het eerst in 1909 gereden en wordt maximaal 1 keer per winter gehouden.";
$verhaal2 = "De " . $evenement . " (Fries: " . $vertaling . ") is een " . $afstand . " kilometer lange " . $soort . " over " . $ijs . " die wordt geoganiseerd door de " . $organisator . "." . $startEindLocatie . ", de hoofdstad van " . $locatie . ", is start-en aankomstplaats. De " . $evenement . " is inmiddels " . $aantalGereden . " maal gerreden en werd voor het eerst in " . $eersteGereden . " gereden en wordt maximaal " . $maximaalGereden . " keer per winter gehouden.";
?>
<p>
    <?php
    echo $verhaal;
    ?>
</p>
<p>
    <?php
    echo $verhaal2
    ?>
</p>
</body>
</html>