<?php
$servername = "127.0.0.1";//localhost
$database = "emra-store-cr";
$username = "root";//Gerald
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);
?>
