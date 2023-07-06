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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the entry ID from the form
    $entryId = $_POST["entry_id"];

    // Retrieve the updated data from the form
    $productName = $_POST["product_name"];
    $transactionDate = $_POST["transaction_date5"];
    $quantity = $_POST["quantity2"];
    $cost = $_POST["cost"];
    $paymentMethod = $_POST["payment_method5"];

    // Update the entry in the database
    $sql = "UPDATE accounting_inventory SET
                product_name2 = '$productName',
                transaction_date5 = '$transactionDate',
                quantity2 = '$quantity',
                cost = '$cost',
                payment_method5 = '$paymentMethod'
            WHERE id = $entryId";

    if ($conn->query($sql) === TRUE) {
        echo "Entry updated successfully";
    } else {
        echo "Error updating entry: " . $conn->error;
    }

    // Redirect back to the retrieved data page
    header("Location: sas_act_new_view5.php");
    exit();
} else {
    // Check if the entry ID is provided in the URL
    if (isset($_GET["id"])) {
        // Retrieve the entry ID from the URL
        $entryId = $_GET["id"];

        // Retrieve the entry data from the database
        $sql = "SELECT product_name2, transaction_date5, quantity2, cost, payment_method5 FROM accounting_inventory WHERE id = $entryId";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Fetch the entry data
            $row = $result->fetch_assoc();
            $productName = $row["product_name2"];
            $transactionDate = $row["transaction_date5"];
            $quantity = $row["quantity2"];
            $cost = $row["cost"];
            $paymentMethod = $row["payment_method5"];
        } else {
            echo "Entry not found";
            exit();
        }
    } else {
        echo "Entry ID not provided";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Entry</title>
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
    <div class="form-container">
        <h2>Edit Entry</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="entry_id" value="<?php echo $entryId; ?>">
            <div class="form-table">
                <label class="form-label">Product Name:</label>
                <input type="text" name="product_name" class="form-input" value="<?php echo $productName; ?>" required>

                <label class="form-label">Transaction Date:</label>
                <input class="form-input" type="date" name="transaction_date5" value="<?php echo $transactionDate; ?>" required>

                <label class="form-label">Quantity:</label>
                <input type="text" name="quantity2" class="form-input" value="<?php echo $quantity; ?>" required>

                <label class="form-label">Cost:</label>
                <input type="text" name="cost" class="form-input" value="<?php echo $cost; ?>" required>

                <label class="form-label">Payment Method:</label>
                <input type="text" name="payment_method5" class="form-input" value="<?php echo $paymentMethod; ?>" required>

                <input type="submit" value="Update" class="form-button">
            </div>
        </form>
    </div>
</body>
</html>
