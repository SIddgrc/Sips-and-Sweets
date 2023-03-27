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
    <input type="date" id="date-purchased" name="date-purchased" value="<?php echo $_POST['date-purchased']; ?>">
    <button type="submit" name="update_date">Update Date</button>
</form>

<form action="update-goods-type.php" method="POST">
    <label for="goods-type">Goods Type:</label>
    <input type="text" id="goods-type" name="goods-type" value="<?php echo $_POST['goods-type']; ?>">
    <button type="submit" name="update_goods_type">Update Goods Type</button>
</form>

<form action="update-item-name.php" method="POST">
    <label for="item-name">Item Name:</label>
    <input type="text" id="item-name" name="item-name" value="<?php echo $_POST['item-name']; ?>">
    <button type="submit" name="update_item_name">Update Item Name</button>
</form>

<form action="update-amount-cost.php" method="POST">
    <label for="amount-cost">Amount Cost:</label>
    <input type="number" id="amount-cost" name="amount-cost" value="<?php echo $_POST['amount-cost']; ?>">
    <button type="submit" name="update_amount_cost">Update Amount Cost</button>
</form>

<form action="update-quantity.php" method="POST">
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" value="<?php echo $_POST['quantity']; ?>">
    <button type="submit" name="update_quantity">Update Quantity</button>
</form>

<form action="update-payment-mode.php" method="POST">
    <label for="payment-mode">Payment Mode:</label>
    <select id="payment-mode" name="payment-mode">
        <option value="cash" <?php if($_POST['payment-mode'] == 'cash') echo 'selected'; ?>>Cash</option>
        <option value="credit" <?php if($_POST['payment-mode'] == 'credit') echo 'selected'; ?>>Credit</option>
        <option value="debit" <?php if($_POST['payment-mode'] == 'debit') echo 'selected'; ?>>Debit</option>
    </select>
    <button type="submit" name="update_payment_mode">Update Payment Mode</button>
</form>
?>
