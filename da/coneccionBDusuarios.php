<?php
$servername = "localhost";//localhost - 127.0.0.1
$database = "id17488232_emra_store_cr";//emra-store-cr
$username = "id17488232_gerald";//Gerald
$password = "Gamboa-Gamboa-2907-Ramirez-Fonseca";//
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);
?>
