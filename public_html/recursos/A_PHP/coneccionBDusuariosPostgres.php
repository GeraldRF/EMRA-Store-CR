
<?php
$servername = "192.168.56.104";
$database = "usuarios";
$username = "postgres";
$password = "linux";
// Create connection
$conn = pg_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . pg_result_error());
}
echo "Connected successfully";
//mysqli_close($conn);
?>
