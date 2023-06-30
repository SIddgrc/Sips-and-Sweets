
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Page</title>
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
    echo "<form action='sas_act_new_editpage.php' method='POST'>";
    // Header
    echo "<h1>Output Data</h1>";
    // Payment
    $customerName1 = $_POST['customer-name1'];
    $transactionDate1 = $_POST['transaction-date1'];
    $amount1 = $_POST['amount1'];
    $paymentMethod1 = $_POST["payment-method1"];

    echo "<h2>Payments from Customers</h2>" . "<br>";
    echo "Customer Name: " . $customerName1 . "<br>";
    echo "Transaction Date: " . $transactionDate1 . "<br>";
    echo "Amount: " . $amount1 . "<br>";
    echo "Payment Method: " . $paymentMethod1 . "<br>";

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

    // Edit data


    echo "<input type='hidden' name='customer-name1' value='" . $customerName1 . "'>";
    echo "<input type='hidden' name='transaction-date1' value='" . $transactionDate1 . "'>";
    echo "<input type='hidden' name='amount1' value='" . $amount1 . "'>";
    echo "<input type='hidden' name='payment-method1' value='" . $paymentMethod1 . "'>";

    echo "<input type='hidden' name='customer-name2' value='" . $customerName2 . "'>";
    echo "<input type='hidden' name='transaction-date2' value='" . $transactionDate2 . "'>";
    echo "<input type='hidden' name='amount2' value='" . $amount2 . "'>";
    echo "<input type='hidden' name='payment-method2' value='" . $payment_method2 . "'>";

    echo "<input type='hidden' name='vendor-name' value='" . $vendorName . "'>";
    echo "<input type='hidden' name='transaction-date3' value='" . $transactionDate3 . "'>";
    echo "<input type='hidden' name='amount3' value='" . $amount3 . "'>";
    echo "<input type='hidden' name='payment-method3' value='" . $payment_method3 . "'>";

    echo "<input type='hidden' name='product-name' value='" . $productName . "'>";
    echo "<input type='hidden' name='transaction-date4' value='" . $transactionDate4 . "'>";
    echo "<input type='hidden' name='quantity' value='" . $quantity . "'>";
    echo "<input type='hidden' name='price' value='" . $price . "'>";
    echo "<input type='hidden' name='payment-method4' value='" . $payment_method4 . "'>";

    echo "<input type='hidden' name='product-name2' value='" . $productName2 . "'>";
    echo "<input type='hidden' name='transaction-date5' value='" . $transactionDate5 . "'>";
    echo "<input type='hidden' name='quantity2' value='" . $quantity2 . "'>";
    echo "<input type='hidden' name='cost' value='" . $cost . "'>";
    echo "<input type='hidden' name='payment-method5' value='" . $payment_method5 . "'>";

    echo "<input type='hidden' name='employee-name' value='" . $employeeName . "'>";
    echo "<input type='hidden' name='transaction-date6' value='" . $transactionDate6 . "'>";
    echo "<input type='hidden' name='amount4' value='" . $amount4 . "'>";
    echo "<input type='hidden' name='payment-method6' value='" . $payment_method6 . "'>";

    // submit button

    echo "<input type='submit' name='edit' value='Edit'>";
    echo "</form>";
        ?>

    </form>
</body>
</html>    
