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

// Check if the entry ID is provided in the URL
if (isset($_GET["id"])) {
    // Retrieve the entry ID from the URL
    $entryId = $_GET["id"];

    // Delete the entry from the database
    $sql = "DELETE FROM accounting_inventory WHERE id = $entryId";

    if ($conn->query($sql) === TRUE) {
        echo "Entry deleted successfully";
    } else {
        echo "Error deleting entry: " . $conn->error;
    }

    // Redirect back to the retrieved data page
    header("Location: sas_act_new_view5.php");
    exit();
} else {
    echo "Entry ID not provided";
    exit();
}
?>