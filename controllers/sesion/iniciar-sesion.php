<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/servidor.php");
 
$user = $_POST["user"];
$pass = $_POST["pass"];

include $_SERVER['DOCUMENT_ROOT']."/da/coneccionBDusuarios.php";

$query = "SELECT * FROM `emra-store-cr`.usuarios WHERE telefono=".$user;

$result= $conn->query($query);
$row_cnt = $result->num_rows;
if($row_cnt != 0){
  while($row = $result->fetch_array(MYSQLI_NUM)){
    $validUser = $row[0];
    $validPassword = $row[1];
  }
}

mysqli_close($conn);

if($row_cnt == 0){
    echo "<script>window.location.href='/ui/sesion/index.php?sesion=no-encontrada'</script>";
} else {
   
    if($validPassword == $pass){
        echo "<script>window.location.href='/'</script>";
        session_start();
        $_SESSION["USER"] = $validUser;
        $_SESSION["UltimoAcceso"] = date("Y-n-j H:i:s");
    }else {
        echo "<script>window.location.href='/ui/sesion/index.php?sesion=incorrecta'</script>";
    }

}


//echo "<script>window.location.href='".$server."'</script>";

?>