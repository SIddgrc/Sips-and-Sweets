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

<form action="update-date.php" method="POST">
    <label for="date-purchased">Date Purchased:</label>
    <input type="date" id="date-purchased" name="date-purchased" value="<?php echo $_POST['current-date']; ?>">
    <input type="hidden" name="goods-type" value="<?php echo $_POST['goods-type']; ?>">
    <input type="hidden" name="item-name" value="<?php echo $_POST['item-name']; ?>">
    <input type="hidden" name="amount-cost" value="<?php echo $_POST['amount-cost']; ?>">
    <input type="hidden" name="quantity" value="<?php echo $_POST['quantity']; ?>">
    <input type="hidden" name="payment-mode" value="<?php echo $_POST['payment-mode']; ?>">
    <button type="submit">Update Date</button>
</form>

?>
