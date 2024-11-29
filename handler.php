<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>

  <?php
  if (isset($_POST["iterations"])) {
    $iterations = $_POST["iterations"];

    if (is_numeric($iterations) && $iterations > 0) {
      $iterations = (int)$iterations; // Ensure it's an integer
      $pi = 0;

      for ($i = 0; $i < $iterations; $i++) {
        $pi += pow(-1, $i) / (2 * $i + 1);
      }
      $pi *= 4;

      echo "<h2>Approximated value of PI after $iterations iterations: $pi</h2>";
    } else {
      // Display error message for invalid input
      echo "<h2 style='color: red;'>Please enter a valid positive integer for the number of iterations.</h2>";
    }
  }
  ?>




</body>

</html>