<?php
    $goodsType = $_POST['goods-type'];
    $itemName = $_POST['item-name'];
    $amountCost = $_POST['amount-cost'];
    $datePurchased = $_POST['date-purchased'];
    $quantity = $_POST['quantity'];
    $paymentMode = $_POST['payment-mode'];

    echo "Goods Type: " . $goodsType . "<br>";
    echo "Item Name: " . $itemName . "<br>";
    echo "Amount Cost: " . $amountCost . "<br>";
    echo "Date Purchased: " . $datePurchased . "<br>";
    echo "Quantity: " . $quantity . "<br>";
    echo "Payment Mode: " . $paymentMode . "<br>";
?>
