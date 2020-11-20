<?php 

$server= "localhost";
$user= "root";
$password= "";

$db = "c19-loginpage";

$con = mysqli_connect($server, $user, $password, $db);

if (!$con) {
    echo "Connection Failed";
}
?>