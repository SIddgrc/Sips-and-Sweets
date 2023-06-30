<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
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
echo "<h1>Edit Page</h1>";
// Payment

$customerName1 = $_POST['customer-name1'];
$transactionDate1 = $_POST['transaction-date1'];
$amount1 = $_POST['amount1'];
$paymentMethod1 = $_POST["payment-method1"];

// Accounts Receivable Data

$customerName2 = $_POST['customer-name2'];
$transactionDate2 = $_POST['transaction-date2'];
$amount2 = $_POST['amount2'];
$payment_method2 = $_POST["payment-method2"];

//Accounts Payable Data

$vendorName = $_POST['vendor-name'];
$transactionDate3 = $_POST['transaction-date3'];
$amount3 = $_POST['amount3'];
$payment_method3 = $_POST["payment-method3"];

$productName = $_POST['product-name'];
$transactionDate4 = $_POST['transaction-date4'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$payment_method4 = $_POST["payment-method4"];

// Production and Inventory Data

$productName2 = $_POST['product-name2'];
$transactionDate5 = $_POST['transaction-date5'];
$quantity2 = $_POST['quantity2'];
$cost = $_POST['cost'];
$payment_method5 = $_POST["payment-method5"];

// Payroll and Expense Data

$employeeName = $_POST['employee-name'];
$transactionDate6 = $_POST['transaction-date6'];
$amount4 = $_POST['amount4'];
$payment_method6 = $_POST["payment-method6"];

?>
       <table>
            <form action="sas_act_edit_output.php" method="POST">

             <table>
            <caption>Payments from Customers</caption>
            <tr>
                <td><label for="customer-name1">Customer Name:</label></td>
                <td>
                    <select id="customer-name1" name="customer-name1">
                        <option value="">Select Customer Name</option>
                        <option value="Mr Jason"<?php if ($customerName1 == "Mr Jason") { echo " selected"; } ?>>Mr Jason</option>
                        <option value="Ms C"<?php if ($customerName1 == "Ms C") { echo " selected"; } ?>>Ms C</option>
                        <option value="Mr eme"<?php if ($customerName1 == "Mr eme") { echo " selected"; } ?>>Mr eme</option>
                    </select>
                </td>
            </tr>
            <tr>
                
                <td><label for="transaction-date1">Transaction Date:</label></td>
                <td><input type="date" id="transaction-date1" name="transaction-date1" value="<?php echo $transactionDate1; ?>"></td>
            </tr>
            <tr>
                <td><label for="amount1">Amount:</label></td>
                <td><input type="number" id="amount1" name="amount1" value="<?php echo $amount1; ?>"></td>
            </tr>
            <tr>
                <td><label for="payment-method1">Select method of payment:</label></td>
                <td>
                    <select id="payment-method1" name="payment-method1">
                        <option value="cash"<?php if ($paymentMethod1 == "cash") { echo " selected"; } ?>>Cash</option>
                        <option value="e-wallet"<?php if ($paymentMethod1 == "e-wallet") { echo " selected"; } ?>>E-wallet</option>
                        <option value="online-banking"<?php if ($paymentMethod1 == "online-banking") { echo " selected"; } ?>>Online Banking</option>
                    </select>
                </td>
            </tr>
            </table>

            <br>
            <table>
            <caption>Accounts Receivable Data</caption>
            <tr>
                <td><label for="customer-name2">Customer Name:</label></td>
                <td>
                    <select id="customer-name2" name="customer-name2">
                        <option value="">Select Customer Name</option>
                        <option value="Mr Jason"<?php if ($customerName2 == "Mr Jason") { echo " selected"; } ?>>Mr Jason</option>
                        <option value="Ms C"<?php if ($customerName2 == "Ms C") { echo " selected"; } ?>>Ms C</option>
                        <option value="Mr eme"<?php if ($customerName2 == "Mr eme") { echo " selected"; } ?>>Mr eme</option>
                    </select>
                </td>
            </tr>
            <tr>
                
                <td><label for="transaction-date2">Transaction Date:</label></td>
                <td><input type="date" id="transaction-date2" name="transaction-date2" value="<?php echo $transactionDate2; ?>"></td>
            </tr>
            <tr>
                <td><label for="amount2">Amount:</label></td>
                <td><input type="number" id="amount2" name="amount2" value="<?php echo $amount2; ?>"></td>
            </tr>
            <tr>
                <td><label for="payment-method2">Select method of payment:</label></td>
                <td>
                    <select id="payment-method2" name="payment-method2">
                        <option value="cash"<?php if ($payment_method2 == "cash") { echo " selected"; } ?>>Cash</option>
                        <option value="e-wallet"<?php if ($payment_method2 == "e-wallet") { echo " selected"; } ?>>E-wallet</option>
                        <option value="online-banking"<?php if ($payment_method2 == "online-banking") { echo " selected"; } ?>>Online Banking</option>
                    </select>
                </td>
            </tr>
            </table>
            <br>
            <table>
            <caption>Accounts Payable Data</caption>
            <tr>
                <td><label for="vendor-name">Vendor Name:</label></td>
                <td>
                    <select id="vendor-name" name="vendor-name">
                        <option value="">Select Customer Name</option>
                        <option value="Mr Jason"<?php if ($vendorName == "Mr Jason") { echo " selected"; } ?>>Mr Jason</option>
                        <option value="Ms C"<?php if ($vendorName == "Ms C") { echo " selected"; } ?>>Ms C</option>
                        <option value="Mr eme"<?php if ($vendorName == "Mr eme") { echo " selected"; } ?>>Mr eme</option>
                    </select>
                </td>
            </tr>
            <tr>
                
                <td><label for="transaction-date3">Transaction Date:</label></td>
                <td><input type="date" id="transaction-date3" name="transaction-date3" value="<?php echo $transactionDate3; ?>"></td>
            </tr>
            <tr>
                <td><label for="amount3">Amount:</label></td>
                <td><input type="number" id="amount3" name="amount3" value="<?php echo $amount3; ?>"></td>
            </tr>
            <tr>
                <td><label for="payment-method3">Select method of payment:</label></td>
                <td>
                    <select id="payment-method3" name="payment-method3">
                        <option value="cash"<?php if ($payment_method3 == "cash") { echo " selected"; } ?>>Cash</option>
                        <option value="e-wallet"<?php if ($payment_method3 == "e-wallet") { echo " selected"; } ?>>E-wallet</option>
                        <option value="online-banking"<?php if ($payment_method3 == "online-banking") { echo " selected"; } ?>>Online Banking</option>
                    </select>
                </td>
            </tr>
            </table>
            <br>
            <table>
                <caption>Sales Data</caption>
                <tr>
                    <td><label for="product-name">Product Name:</label></td>
                    <td>
                        <select id="product-name" name="product-name">
                            <option value="">Select Customer Name</option>
                            <option value="Mr Jason"<?php if ($productName == "Mr Jason") { echo " selected"; } ?>>Mr Jason</option>
                            <option value="Ms C"<?php if ($productName == "Ms C") { echo " selected"; } ?>>Ms C</option>
                            <option value="Mr eme"<?php if ($productName == "Mr eme") { echo " selected"; } ?>>Mr eme</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    
                    <td><label for="transaction-date4">Transaction Date:</label></td>
                    <td><input type="date" id="transaction-date4" name="transaction-date4" value="<?php echo $transactionDate4; ?>"></td>
                </tr>
                <tr>
                    <td><label for="quantity">Quantity:</label></td>
                    <td><input type="number" id="quantity" name="quantity" value="<?php echo $quantity; ?>"></td>
                </tr>
                <tr>
                    <td><label for="price">Price:</label></td>
                    <td><input type="number" id="price" name="price" value="<?php echo $price; ?>"></td>
                </tr>
                <tr>
                    <td><label for="payment-method4">Select method of payment:</label></td>
                    <td>
                        <select id="payment-method4" name="payment-method4">
                            <option value="cash"<?php if ($payment_method4 == "cash") { echo " selected"; } ?>>Cash</option>
                            <option value="e-wallet"<?php if ($payment_method4 == "e-wallet") { echo " selected"; } ?>>E-wallet</option>
                            <option value="online-banking"<?php if ($payment_method4 == "online-banking") { echo " selected"; } ?>>Online Banking</option>
                        </select>
                    </td>
                </tr>
                </table>
                <br>
                <table>
                    <caption>Production and Inventory Data</caption>
                    <tr>
                        <td><label for="product-name2">Product Name:</label></td>
                        <td>
                            <select id="product-name2" name="product-name2">
                                <option value="">Select Customer Name</option>
                                <option value="Mr Jason"<?php if ($productName2 == "Mr Jason") { echo " selected"; } ?>>Mr Jason</option>
                                <option value="Ms C"<?php if ($productName2 == "Ms C") { echo " selected"; } ?>>Ms C</option>
                                <option value="Mr eme"<?php if ($productName2 == "Mr eme") { echo " selected"; } ?>>Mr eme</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        
                        <td><label for="transaction-date5">Transaction Date:</label></td>
                        <td><input type="date" id="transaction-date5" name="transaction-date5" value="<?php echo $transactionDate5; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="quantity2">Quantity:</label></td>
                        <td><input type="number" id="quantity" name="quantity2" value="<?php echo $quantity2; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="cost">Cost:</label></td>
                        <td><input type="number" id="cost" name="cost" value="<?php echo $cost; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="payment-method5">Select method of payment:</label></td>
                        <td>
                            <select id="payment-method5" name="payment-method5">
                                <option value="cash"<?php if ($payment_method5 == "cash") { echo " selected"; } ?>>Cash</option>
                                <option value="e-wallet"<?php if ($payment_method5 == "e-wallet") { echo " selected"; } ?>>E-wallet</option>
                                <option value="online-banking"<?php if ($payment_method5 == "online-banking") { echo " selected"; } ?>>Online Banking</option>
                            </select>
                        </td>
                    </tr>
                    </table>
                    <br>
                    <table>
                        <caption>Payroll and Expense Data</caption>
                        <tr>
                            <td><label for="employee-name">Employee Name:</label></td>
                            <td>
                                <select id="employee-name" name="employee-name">
                                    <option value="">Select Customer Name</option>
                                    <option value="Mr Jason"<?php if ($employeeName == "Mr Jason") { echo " selected"; } ?>>Mr Jason</option>
                                    <option value="Ms C"<?php if ($employeeName == "Ms C") { echo " selected"; } ?>>Ms C</option>
                                    <option value="Mr eme"<?php if ($employeeName == "Mr eme") { echo " selected"; } ?>>Mr eme</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="transaction-date6">Transaction Date:</label></td>
                            <td><input type="date" id="transaction-date6" name="transaction-date6" value="<?php echo $transactionDate6; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="amount4">Amount:</label></td>
                            <td><input type="number" id="amount4" name="amount4" value="<?php echo $amount4; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="payment-method6">Select method of payment:</label></td>
                            <td>
                                <select id="payment-method6" name="payment-method6">
                                    <option value="cash"<?php if ($payment_method6 == "cash") { echo " selected"; } ?>>Cash</option>
                                    <option value="e-wallet"<?php if ($payment_method6 == "e-wallet") { echo " selected"; } ?>>E-wallet</option>
                                    <option value="online-banking"<?php if ($payment_method6 == "online-banking") { echo " selected"; } ?>>Online Banking</option>
                                </select>
                            </td>
                        </tr>
                        </table>
                <input type="submit" value="Save">
            </form>
</html>
