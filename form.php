<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <style>
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-container label,
    .form-container input,
    .form-container button {
      display: block;
      margin-bottom: 10px;
    }

    .form-container input[type="file"] {
      display: inline-block;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Form To Insert Medical Data</h2>
    <form id="myForm" action="insert.php" method="POST" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required>

      <label for="weight">Weight:</label>
      <input type="number" id="weight" name="weight" required>

      <label for="email">Email ID:</label>
      <input type="email" id="email" name="email" required>

      <label for="pdf">Upload Medical Report:</label>
      <input type="file" id="pdf" name="pdf" accept=".pdf" required>

      <button type="submit" name="submit" value="submit">Submit</button>
    </form>
    <h2>Retrieve PDF</h2>
  <form action="form_retrieve.php" method="GET">
    <button type="submit">Go to Form</button>
  </form>
  </div>

  <!-- <script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form submission
      var name = document.getElementById("name").value;
      var age = document.getElementById("age").value;
      var weight = document.getElementById("weight").value;
      var email = document.getElementById("email").value;
      var pdfFile = document.getElementById("pdf").files[0];

      if (!name || !age || !weight || !email || !pdfFile) {
        alert("Please fill in all fields.");
        return;
      }

      if (!isValidName(name)) {
        alert("Please enter a valid name.");
        return;
      }

      if (!isValidEmail(email)) {
        alert("Please enter a valid email address.");
        return;
      }

      console.log("Name: " + name);
      console.log("Age: " + age);
      console.log("Weight: " + weight);
      console.log("Email: " + email);
      console.log("PDF File:", pdfFile);

      document.getElementById("myForm").reset();
    });

    function isValidName(name) {
      var nameRegex = /^[A-Za-z\s]+$/;
      return nameRegex.test(name);
    }

    // Function to validate email address
    function isValidEmail(email) {
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  </script> -->
</body>
</html>




