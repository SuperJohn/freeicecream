

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freeicecream";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$full_name = $_GET['full_name'];
$location_name= $_GET['location_name'];
$quantity= $_GET['quantity'];

date_default_timezone_set('America/Los_Angeles');
$datetime = date('m/d/Y h:i:s a', time());;

$sql = "INSERT INTO donation_log (full_name, location, quantity,date_time_submit)
VALUES ('$full_name', '$location_name', '$quantity','$datetime')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>