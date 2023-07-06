<?php
// Database connection variables
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "sas_sys";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form inputs
$employeeName = $_POST['employee-name'];
$transactionDate = $_POST['transaction-date6'];
$amount = $_POST['amount4'];
$paymentMethod = $_POST['payment-method6'];

// Prepare the SQL statement to insert data into the database
$sql = "INSERT INTO accounting_payroll (employee_name, transaction_date6, amount4, payment_method6) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $employeeName, $transactionDate, $amount, $paymentMethod);

// Execute the SQL statement
if ($stmt->execute()) {
    echo "Form data saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>