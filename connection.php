<?php

$host = "localhost";
$user = "root";
$password="123";
$db="medicalpdf";

session_start();

$data = mysqli_connect($host,$user,$password,$db);
if($data===false){
    die("connection failed");
}
// else{
//     echo "Connection successful";
// }

?>