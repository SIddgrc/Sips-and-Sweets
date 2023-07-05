<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "sas_sys";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT customer_name2, transaction_date2, amount2, payment_method2 FROM accounting_receivable";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Retrieved Form Data</title>
<style>
    h1 {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 5px;
    color: #ff85a2;
    font-size: 32px;
    margin-top: 10px;
    text-align: center;
    }
    h2 {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 5px;
    color: #ff85a2;
    font-size: 32px;
    margin-top: 10px;
    text-align: center; 
    }

    body {
    background-color: #fde7e7;
    font-family: Arial, sans-serif;
    font-size: 16px;
    margin-left: 5%;
    margin-top: 2.5%;
    line-height: 1.5em;
    }

    /* Form container */
    .form-container {
    max-width: 1250px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffc2d1;
    border-radius: 10px;
    box-shadow: 0 0 2px #fb6f92;
    }

    /* Form title */
    .form-title {
    margin-top: 0;
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    }

    /* Form fieldset */
    .form-table {
    border: none;
    padding: 0;
    margin: 0;
    }

    /* Form label */
    .form-label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    }

    /* Form input */
    .form-input {
    width: 95%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ffe5ec;
    font-size: 16px;
    }

    /* Form input focus */
    .form-input:focus {
    outline: none;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    border: 1px solid #fb6f92;
    }

    /* Form button */
    .form-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #fb6f92;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    }

    /* Form button hover */
    .form-button:hover {
    background-color: #ffc2d1;
    }

    .add-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #fb6f92;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    }

    /* Form button hover */
    .add-button:hover {
    background-color: #ffc2d1;
    }
</style>
</head>
<body>
  <h2>Retrieved Form Data</h2>
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<div class='form-data'>";
      echo "<p><strong>Name:</strong> " . $row["customer_name2"] . "</p>";
      echo "<p><strong>Transaction Date:</strong> " . $row["transaction_date2"] . "</p>";
      echo "<p><strong>Amount:</strong> " . $row["amount2"] . "</p>";
      echo "<p><strong>Payment Method:</strong> " . $row["payment_method2"] . "</p>";
      echo "</div>";
      echo "<hr>";
    }
  } else {
    echo "<p>No form data found.</p>";
  }

  // Close the connection
  $conn->close();
  ?>
  <a href="sas_act_edit_input.html" class="form-button">New Entry</a>
</body>
</html>
