<h2> These movies were found for deletion. </h2>
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

//find row in database
$sql = "SELECT * FROM Shows WHERE title LIKE '$title'";
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
?>
<p>Type the id of the row you want to delete to confirm deletion.</p>

<form action="delete_confirmed.php" method="post">
        <label for="show_id">Show_ID:</label>
        <input type="text" id="show_id" name="show_id" required><br><br>
        
        <input type="submit" value="Confirm">
</form>
<?php
$conn->close();
?>