<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('connection.php');

$targetDirectory = "uploads/";


$targetFile = $targetDirectory . basename($_FILES['pdf']['name']);


move_uploaded_file($_FILES['pdf']['tmp_name'], $targetFile);

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['submit'])){
  $pdf_path = $targetFile;


  $name = $_POST['name'];
  $age = $_POST['age'];
  $weight = $_POST['weight'];
  $email = $_POST['email'];


  $sql = "INSERT INTO `table1` (`name`, `age`, `weight`, `email`, `pdf_path`) VALUES ('$name', '$age','$weight', '$email', '$pdf_path')";

  if (mysqli_query($data, $sql)) {
    echo "<h3>Data inserted successfully</h3>";
    
  } else {
    echo "Error: " . mysqli_error($data);
  }
}

mysqli_close($data);
?>



