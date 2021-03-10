<?php
$host = "localhost";
$user = "root";
$password = ""; 
$bd = "mercado";

 if ( $conn = mysqli_connect($host, $user, $password, $bd) ) {
     echo "Conectado";
 } else
    echo "erro!";

?>