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
$title = $_POST['title'];
$show_type = $_POST['show_type'];
$duration = $_POST['duration'];
$rating = $_POST['rating'];
$date_added = $_POST['date_added'];
$listed_in = $_POST['listed_in'];

// Step 3: Insert Data into Database
$sql = "INSERT INTO Shows (title, show_type, duration, rating, date_added, listed_in) 
        VALUES ('$title', '$show_type', '$duration', '$rating', '$date_added', '$listed_in')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>New record created successfully</h1>";
    $sql = "SELECT * FROM Shows WHERE title LIKE '$title'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<h2>Result</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Show_ID</th>
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
                    <td>".$row["show_id"]."</td>
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
    echo '<p><a href="https://cpsc.umw.edu/Team_Tiger/Team_Tiger_Website_FINAL.php">homepage</a></p>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Step 4: Close the Connection
$conn->close();
?>
