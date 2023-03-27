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

<form action="edit-date.php" method="POST">
    <input type="hidden" name="goods-type" value="<?php echo $goodsType; ?>">
    <input type="hidden" name="item-name" value="<?php echo $itemName; ?>">
    <input type="hidden" name="amount-cost" value="<?php echo $amountCost; ?>">
    <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
    <input type="hidden" name="payment-mode" value="<?php echo $paymentMode; ?>">
    <input type="hidden" name="current-date" value="<?php echo $datePurchased; ?>">
    <button type="submit">Edit Date Purchased</button>
</form>
?>
