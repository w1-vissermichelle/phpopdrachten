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
<p>
    <?php
    // Declareer en initialiseer variablen
    $trafficLightColor = "rood";
    $ambulanceComing = true;
    $driveOn = true;

    if($trafficLightColor == "groen" && $ambulanceComing == false)
    {
        $driveOn = true;
    }
    elseif($trafficLightColor == "oranje" && $ambulanceComing == false)
    {
        $driveOn = true;
    }
    elseif($trafficLightColor == "rood" && $ambulanceComing == false)
    {
        $driveOn = false;
    }
    elseif($trafficLightColor == "groen" && $ambulanceComing == true)
    {
        $driveOn = false;
    }
    elseif($trafficLightColor == "oranje" && $ambulanceComing == true)
    {
        $driveOn = false;
    }
    elseif($trafficLightColor == "rood" && $ambulanceComing == true)
    {
        $driveOn = false;
    }

    if($driveOn == true)
    {
        echo "U moet doorrijden";
    }
    else
    {
        echo "U moet stoppen";
    }
    ?>
</p>
<p>
    <?php
    $countryName = "Nederland";
    $currentAge = 18;

    if($countryName == "België" && $currentAge >= 16)
    {
        echo "Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.";
        echo " Je mag hier zwakke alcohol drinken.";
    }
    elseif($countryName == "België" && $currentAge >= 18)
    {
        echo "Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.";
        echo " Je mag hier sterke alcohol drinken.";
    }
    elseif($countryName == "Bulgarije" && $currentAge >= 18)
    {
        echo "Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.";
        echo " Je mag hier sterke en zwakke alcohol drinken.";
    }
    elseif($countryName == "Cyprus" && $currentAge >= 17)
    {
        echo "Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.";
        echo " Je mag hier sterke en zwakke alcohol drinken.";
    }
    elseif($countryName == "Nederland" && $currentAge >= 18)
    {
        echo "Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.";
        echo " Je mag hier sterke en zwakke alcohol drinken.";
    }
    elseif($countryName == "Zweden" && $currentAge >= 18)
    {
        echo "Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.";
        echo " Je mag hier zwakke alcohol drinken.";
    }
    elseif($countryName == "Zweden" && $currentAge >= 20)
    {
        echo "Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.";
        echo " Je mag hier sterke alcohol drinken.";
    }
    else
    {
        echo "Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.";
        echo " Je mag hier geen alcohol drinken.";
    }
    ?>
</p>
</body>
</html>