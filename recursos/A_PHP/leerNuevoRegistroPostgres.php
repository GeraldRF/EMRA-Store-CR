<?php 

$cor=$_POST['Correo'];
$tel=$_POST['Telefono'];
$nom =$_POST['Nombre'];
$ape=$_POST['Apellidos'];
$dir=$_POST['Direccion'];
$con=$_POST['Contra'];
$con2=$_POST['Contra2'];

if($cor!==""&&$tel!==""&&$nom!==""&&$ape!==""&&$con!==""&&$con2!==""){
    include 'coneccionBDusuariosPostgres.php';
  
  if($con===$con2){
  
  if(!$conn->pg_query("INSERT INTO datos VALUES ($tel,\"$nom\", \"$ape\", \"$dir\", \"$cor\", \"$con\")")){
 
     echo" <script>alert(\"Falló: $conn->error\")</script>";
     pg_close($conn);
     echo "<script>history.back()</script>";
  }//Fin if
  else{
      echo "<p>Se agrego correctamente</p>";
      pg_close($conn);
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