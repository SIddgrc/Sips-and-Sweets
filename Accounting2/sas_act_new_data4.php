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
$productName = $_POST['product-name'];
$transactionDate = $_POST['transaction-date4'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$paymentMethod = $_POST['payment-method4'];

// Prepare the SQL statement to insert data into the database
$sql = "INSERT INTO accounting_sales (product_name, transaction_date4, quantity, price, payment_method4) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $productName, $transactionDate, $quantity, $price, $paymentMethod);

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