<?php
include 'creds.php';
$servername = "localhost"; 
$database = "Team_Tiger"; 

// Create connection to database
$conn = new mysqli($servername, $username, $password, $database);
if(mysqli_connect_errno()){
    echo "failed to connect";
    exit();
}
else{
    #echo "connected succesfully";
}

?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.php">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Movie Finder</title>
	<link rel="stylesheet" href="luke_gibson_first_style.css">
    
</head>
<body>
	<header>
		<h1>My Movie Finder</h1>
	</header>
<?php
    $sql = "SELECT title, show_type, duration, rating, date_added, listed_in FROM Shows LIMIT 10";
$result = $conn->query($sql);

// Display the "Shows" table
if ($result->num_rows > 0) {
    echo "<h2>Movies</h2>";
    echo "<table border='1'>
            <tr>
                <th>Title</th>
                <th>Show Type</th>
                <th>Duration</th>
                <th>Rating</th>
                <th>Date Added</th>
                <th>Listed In</th>
            </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["title"]."</td>
                <td>".$row["show_type"]."</td>
                <td>".$row["duration"]."</td>
                <td>".$row["rating"]."</td>
                <td>".$row["date_added"]."</td>
                <td>".$row["listed_in"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
//Close the Connection
$conn->close();
?>
<form>
      <input type="button" onclick="window.location.href='https://cpsc.umw.edu/Team_Tiger/login.php';" value="Admin Login" />
</form>

</body>