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
$vendorName = $_POST['vendor-name'];
$transactionDate3 = $_POST['transaction-date3'];
$amount3 = $_POST['amount3'];
$paymentMethod3 = $_POST['payment-method3'];

// Prepare the SQL statement to insert data into the database
$sql = "INSERT INTO accounting_payable (vendor_name, transaction_date3, amount3, payment_method3) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $vendorName, $transactionDate3, $amount3, $paymentMethod3);

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