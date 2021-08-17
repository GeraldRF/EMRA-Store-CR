
<?php
$servername = "localhost";
$database = "id16433138_usuarios";
$username = "id16433138_grfixurdivice";
$password = "Ramirez.2907";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);
?>
