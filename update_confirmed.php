
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
$show_id = $_POST['show_id'];
$column = $_POST['column'];
$new_data = $_POST['new_data'];
// delete the row
$sql = "UPDATE Shows SET $column='$new_data' WHERE show_id='$show_id'";

if ($conn->query($sql) === TRUE) {
    echo "<h2> Record Updated </h2>";
    $sql = "SELECT * FROM Shows WHERE show_id LIKE '$show_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
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
// Close the Connection
$conn->close();
?>