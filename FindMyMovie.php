<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="projB.css">
    <title>Find My Movie</title>
  </head>
  <body style="background-color: #FFFFEC">
    <h1><div class="box header">Movies</div></h1>
    <p>
    <?php
    $time=date('h:i:s');
    echo('Time: ');
    echo($time);
    ?>
    </p>
    <br>
    <table>
    <?php
    echo "<tr>";
        echo '<th style=background-color:' . $_GET["table_color"] . '><a href="?table_color=' . $_GET["table_color"] . '&sortCol=show_id">show_id</a></th>';
        echo '<th style=background-color:' . $_GET["table_color"] . '><a href="?table_color=' . $_GET["table_color"] . '&sortCol=title">title</a></th>';
        echo '<th style=background-color:' . $_GET["table_color"] . '><a href="?table_color=' . $_GET["table_color"] . '&sortCol=show_type">show_type</a></th>';
        echo '<th style=background-color:' . $_GET["table_color"] . '><a href="?table_color=' . $_GET["table_color"] . '&sortCol=duration">duration</a></th>';
	echo '<th style=background-color:' . $_GET["table_color"] . '><a href="?table_color=' . $_GET["table_color"] . '&sortCol=rating">rating</a></th>';
        echo '<th style=background-color:' . $_GET["table_color"] . '><a href="?table_color=' . $_GET["table_color"] . '&sortCol=date_added">date_added</a></th>';
	echo '<th style=background-color:' . $_GET["table_color"] . '><a href="?table_color=' . $_GET["table_color"] . '&sortCol=listed_in">listed_in</a></th>';
	echo '<th style=background-color:' . $_GET["table_color"] . '><a href="?table_color=' . $_GET["table_color"] . '&sortCol=credits">credits</a></th>';
    echo "</tr>";

    $dbname = 'Team_Tiger';
    $dbuser = 'cryan3';
    $dbpass = 'PY804ZP1';
    $dbhost = '127.0.0.1';
    $connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to " . $dbhost);
    mysqli_select_db($connect, $dbname) or die("Could not open the database" . $dbname);
    $result = mysqli_query($connect, "SELECT * FROM Shows ORDER BY " . $_GET["sortCol"] . " LIMIT 50");
    $i = 0;
    while( $row = $result->fetch_array() )
    {
        echo "<tr>";
        echo "<td>" . $row['show_id'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['show_type'] . "</td>";
        echo "<td>" . $row['duration'] . "</td>";
        echo "<td>" . $row['rating'] . "</td>";
        echo "<td>" . $row['date_added'] . "</td>";
        echo "<td>" . $row['listed_in'] . "</td>";
        echo "<td>" . $row['credits'] . "</td>";
        echo "<br>";
        echo "</tr>";
    }
    ?>
    </table>
  </body>
</html>
