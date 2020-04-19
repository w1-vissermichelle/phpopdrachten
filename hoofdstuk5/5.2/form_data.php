<?php
/**
 * User: Michelle Visser
 * Date: 00-00-0000
 * Time: 00:00
 * File: opdracht.php
 */
?>
<html>
    <head>
        <title>

        </title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body>
        <h1>
            Uitschrijfformulier KW1C
        </h1>
        <hr>
        <table>
            <tr>
                <td>
                    Voor en achternaam
                </td>
                <td>
                    <?php
                        echo $_GET["nameStudent"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Studentennummer
                </td>
                <td>
                    <?php
                        echo $_GET["numberStudent"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Datum van uitschrijving
                </td>
                <td>
                    <?php
                        echo $_GET["dateStopping"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Reden van uitschrijving
                </td>
                <td>
                    <?php
                        if ($_GET["reasonStopping"] == "wrongChoice");
                        {
                            echo "Verkeerde keuze";
                        }
                        ifelse ($_GET["reasonStopping"] == "boringTeachers");
                        {
                            echo "Saaie docenten";
                        }
                        ifelse ($_GET["reasonStopping"] == "moving");
                        {
                            echo "Verhuizing";
                        }
                        ifelse ($_GET["reasonStopping"] == "badSchool");
                        {
                            echo "Slechte school";
                        }
                        ifelse ($_GET["reasonStopping"] == "longTravel");
                        {
                            echo "Te ver reizen";
                        }
                    ?>
                </td>
            </tr>
            <tr>

            </tr>
        </table>
    </body>
</html>