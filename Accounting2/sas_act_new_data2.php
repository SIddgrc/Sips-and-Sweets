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
$customerName = $_POST['customer-name2'];
$transactionDate = $_POST['transaction-date2'];
$amount = $_POST['amount2'];
$paymentMethod = $_POST['payment-method2'];

// Prepare the SQL statement to insert data into the database
$sql = "INSERT INTO accounting_receivable (customer_name2, transaction_date2, amount2, payment_method2) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $customerName, $transactionDate, $amount, $paymentMethod);

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