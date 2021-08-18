<?php 

$cor=$_POST['Correo'];
$tel=$_POST['Telefono'];
$nom =$_POST['Nombre'];
$ape=$_POST['Apellidos'];
$dir=$_POST['Direccion'];
$con=$_POST['Contra'];
$con2=$_POST['Contra2'];

if($cor!==""&&$tel!==""&&$nom!==""&&$ape!==""&&$con!==""&&$con2!==""){
    include 'coneccionBDusuarios.php';
  
  if($con===$con2){
  
  if(!$conn->query("INSERT INTO id16433138_usuarios.datos VALUES (\"$cor\", \"$nom\", \"$ape\", \"$dir\", $tel, \"$con\")")){
 
     echo" <script>alert(\"Falló: $conn->error\")</script>";
     mysqli_close($conn);
     echo "<script>history.back()</script>";
  }//Fin if
  else{
      echo "<p>Se agrego correctamente</p>";
      mysqli_close($conn);
  }
      
  }else{
      echo" <script>alert(\"La contraseña no coincide\")</script>";
     echo "<script>history.back()</script>";
  }

}else{
    echo "<script>alert(\"Ha dejado espacios vacios, verifique e intente de nuevo.\")</script>";
    echo "<script>history.back()</script>";
}

?>