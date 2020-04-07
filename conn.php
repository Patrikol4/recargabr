<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "recargabr";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){
  echo "Erro. Tente novamente";
}

// mysqli_close($conn);
?>
