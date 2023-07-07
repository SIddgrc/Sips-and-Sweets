<?php
$servername = "127.0.0.1"; // Replace with your MySQL server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "sas_sys"; // Replace with your MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['full-name'];
$contact = $_POST['contact-info'];
$address = $_POST['address'];
$company = $_POST['company-name'];
$birthday = $_POST['bday'];
$gender = $_POST['gender'];

// Prepare the INSERT statement
$sql = "INSERT INTO `mkt` (`name`, `contact`, `address`, `company_name`, `bday`, `gender`) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $name, $contact, $address, $company, $birthday, $gender);

// Execute the statement
if ($stmt->execute()) {
    echo "Form data saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
