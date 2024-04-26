
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

// delete the row
$sql = "DELETE FROM Shows WHERE show_id = '$show_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record Deleted.";
    echo '<p><a href="https://cpsc.umw.edu/Team_Tiger/Team_Tiger_Website_FINAL.php">homepage</a></p>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Step 4: Close the Connection
$conn->close();
?>