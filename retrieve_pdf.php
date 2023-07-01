<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];


  $sql = "SELECT `pdf_path` FROM `table1` WHERE `email` = '$email'";


  $result = mysqli_query($data, $sql);

  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $pdf_path = $row['pdf_path'];

    header("Content-type: application/pdf");
    header("Content-Disposition: attachment; filename=document.pdf");
    readfile($pdf_path);
    exit;
  } else {
    echo "<p>No PDF file found for the provided email ID.</p>";
  }

  mysqli_free_result($result);
}

mysqli_close($data);


?>

