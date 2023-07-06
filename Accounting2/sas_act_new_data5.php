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
$productName = $_POST['product-name2'];
$transactionDate = $_POST['transaction-date5'];
$quantity = $_POST['quantity2'];
$cost = $_POST['cost'];
$paymentMethod = $_POST['payment-method5'];

// Prepare the SQL statement to insert data into the database
$sql = "INSERT INTO accounting_inventory (product_name2, transaction_date5, quantity2, cost, payment_method5) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $productName, $transactionDate, $quantity, $cost, $paymentMethod);

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