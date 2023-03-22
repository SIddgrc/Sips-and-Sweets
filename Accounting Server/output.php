<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    body {
  background-color: #fde7e7;
  font-family: Arial, sans-serif;
  font-size: 16px;
  margin-left: 5%;
  margin-top: 2.5%;
  line-height: 1.5em;
}
    </style>
</head>
<body>
    <?php

    // Header

    echo "<h1>Output Data</h1>";

    // Retrieve input data from the form
    // Payments from Customers

    $customerName = $_POST['customer-name'];
    $transactionDate = $_POST['transaction-date'];
    $amount = $_POST['amount'];
    $payment_method = $_POST["payment-method"];
    echo "<h2>Payments from Customers</h2>" . "<br>";

    // Display the output

    echo "Customer Name: " . $customerName . "<br>";
    echo "Transaction Date: " . $transactionDate . "<br>";
    echo "Amount: " . $amount . "<br>";
    echo "Payment Method: " . $payment_method . "<br>";

    // Accounts Receivable Data
    $customerName2 = $_POST['customer-name2'];
    $transactionDate2 = $_POST['transaction-date2'];
    $amount2 = $_POST['amount2'];
    $payment_method2 = $_POST["payment-method2"];

    echo "<h2>Accounts Receivable Data</h2>" . "<br>";

    echo "Customer Name: " . $customerName2 . "<br>";
    echo "Transaction Date: " . $transactionDate2 . "<br>";
    echo "Amount: " . $amount2 . "<br>";
    echo "Payment Method: " . $payment_method2 . "<br>";

    //Accounts Payable Data

    $vendorName = $_POST['vendor-name'];
    $transactionDate3 = $_POST['transaction-date3'];
    $amount3 = $_POST['amount3'];
    $payment_method3 = $_POST["payment-method3"];

    echo "<h2>Accounts Payable Data</h2>" . "<br>";

    echo "Vendor Name: " . $vendorName . "<br>";
    echo "Transaction Date: " . $transactionDate3 . "<br>";
    echo "Amount: " . $amount3 . "<br>";
    echo "Payment Method: " . $payment_method3 . "<br>";

    //Sales Data

    $productName = $_POST['product-name'];
    $transactionDate4 = $_POST['transaction-date4'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $payment_method4 = $_POST["payment-method4"];

    echo "<h2>Sales Data</h2>" . "<br>";

    echo "Product Name: " . $productName . "<br>";
    echo "Transaction Date: " . $transactionDate4 . "<br>";
    echo "Quantity: " . $quantity . "<br>";
    echo "Price: " . $price . "<br>";
    echo "Payment Method: " . $payment_method4 . "<br>";

    // Production and Inventory Data

    $productName2 = $_POST['product-name2'];
    $transactionDate5 = $_POST['transaction-date5'];
    $quantity2 = $_POST['quantity2'];
    $cost = $_POST['cost'];
    $payment_method5 = $_POST["payment-method5"];

    echo "<h2>Production and Inventory Data</h2>" . "<br>";

    echo "Product Name: " . $productName2 . "<br>";
    echo "Transaction Date: " . $transactionDate5 . "<br>";
    echo "Quantity: " . $quantity2 . "<br>";
    echo "Cost: " . $cost . "<br>";
    echo "Payment Method: " . $payment_method5 . "<br>";

    // Payroll and Expense Data

    $employeeName = $_POST['employee-name'];
    $transactionDate6 = $_POST['transaction-date6'];
    $amount4 = $_POST['amount4'];
    $payment_method6 = $_POST["payment-method6"];

    echo "<h2>Payroll and Expense Data</h2>" . "<br>";

    echo "Employee : " . $employeeName . "<br>";
    echo "Transaction Date: " . $transactionDate6 . "<br>";
    echo "Amount: " . $amount4 . "<br>";
    echo "Payment Method: " . $payment_method6 . "<br>";

    ?>
</body>
</html>    
