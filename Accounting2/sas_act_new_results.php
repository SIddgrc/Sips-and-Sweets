<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #fde7e7; /* Updated pastel color pink */
  margin: 0;
}

.container {
  max-width: 500px;
  margin: 50px auto;
  background-color: #ffc2d1;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
  color: #333;
  margin-top: 0;
}

p {
  margin-bottom: 10px;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #fb6f92;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #ffc2d1;
}
</style>


</head>
<body>
  <div class="container">
    <h2>Form Submission Result</h2>
    <?php
    // Retrieve and display form data
    if (isset($_POST['customer-name1']) && isset($_POST['transaction-date1']) && isset($_POST['amount1']) && isset($_POST['payment-method1'])) {
      include 'sas_act_new_data.php';
      $customerName1 = $_POST['customer-name1'];
      $transactionDate1 = $_POST['transaction-date1'];
      $amount1 = $_POST['amount1'];
      $paymentMethod1 = $_POST['payment-method1'];
      echo "<p><strong>Customer Name:</strong> " . $customerName1 . "</p>";
      echo "<p><strong>Transaction Date:</strong> " . $transactionDate1 . "</p>";
      echo "<p><strong>Amount:</strong> " . $amount1 . "</p>";
      echo "<p><strong>Payment Method:</strong> " . $paymentMethod1 . "</p>";
    } else {
      echo "<p>No form data submitted.</p>";
    }
    ?>
  </div>
  <a href="sas_act_edit_input.html" class="btn">Go Back</a>
  <a href="sas_act_new_view.php" class="btn">View Entries</a>
</body>
</html>