<?php
include("connection.php")
?>

<!DOCTYPE html>
<html>
<head>
  <title>Retrieve PDF</title>
</head>
<body>
  <h2>Retrieve PDF</h2>
  <form action="retrieve_pdf.php" method="POST">
    <label for="email">Email ID:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit" name="submit" >Retrieve PDF</button>
  </form>
  <h1>Go Back To Main Form </h1>
  <form action="form.php" method="GET">
    <button type="submit" name="submit">Go to Form</button>
  </form>
</body>
</html>
