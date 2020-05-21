<?php
/**
 * User: Michelle Visser
 * Date: 00-00-0000
 * Time: 00:00
 * File: opdracht.php
 */
?>
<html>
    <style>
        th, table, tr, td{
            border: black solid 1px;
        }
    </style>
    <head>
        <title>

        </title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body>
        <p>
            <?php
                include 'functions.php';
                startConnection();
                $query = null;
                $aJokes = array();
                if (isset($_GET['querycheck'])) {
                    if ($_GET['querytext'] == null) {
                        $query = "SELECT * FROM joke";
                        echo $query;
                    } else {
                        $query = "SELECT * FROM joke WHERE joketext LIKE '%" . $_GET['querytext'] . "%'";
                        echo $query;
                    }
                    $jokes = executeQuery($query);
                    while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
                    {
                        $aJokes[] = $row;
                    }
                }

            ?>
        </p>
        <form method="get">
            <p>
                Zoekterm:
            </p>
            <input type="text" name="querytext">
            <input type="submit" value="Zoeken" name="querycheck">
        </form>
        <hr>
        <table>
            <tr>
                <th>Jokeid</th>
                <th>Joketext</th>
                <th>Jokeclou</th>
                <th>Jokedate</th>
            </tr>
            <?php
            foreach ($aJokes as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['joketext'] . "</td>";
                echo "<td>" . $row['jokeclou'] . "</td>";
                echo "<td>" . $row['jokedate'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>