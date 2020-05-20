<?php
/**
 * User: Michelle Visser
 * Date: 20-05-2020
 * Time: 14:20
 * File: 7.2.php
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
    <?php
    // Open de database connectie en ODBC driver
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
    }
    catch (PDOException $e)
    {
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        die();
    }
    echo "database connectie gelukt";

    // Uitvoeren van een SQl query
    try
    {
        // Query schrijven
        $sql = 'SELECT * FROM joke';
        // Query uitvoeren
        $result = $pdo->query($sql);
    }
    catch (PDOException $e)
    {
        echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
        exit();
    }
    // Lege Array aanmaken voor de results
    $aJokes = array();
    // Door de results heen loopen via een while
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        // Result wegschrijven in de $aJokes array
        $aJokes[] = $row;
    }
    // Tonen van de inhoud van aJokes
    echo "<pre>";
//    var_dump($aJokes);
    echo "</pre>";



    ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Joketext</th>
                <th>Jokeclou</th>
                <th>Jokedate</th>
            </tr>
                <?php
                foreach($aJokes as $grap)
                {
                    echo "<tr>";
                    echo "<td>".$grap['id']."</td>";
                    echo "<td>".$grap['joketext']."</td>";
                    echo "<td>".$grap['jokeclou']."</td>";
                    echo "<td>".$grap['jokedate']."</td>";
                    echo "</tr>";
                }
                ?>
        </table>
    </body>
</html>