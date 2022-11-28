<?php
if (isset($_POST['ITEM_ID'], $_POST['ITEM_QTY']) && is_numeric($_POST['ITEM_ID']) && is_numeric($_POST['ITEM_QTY'])) {
    echo "<h1>Cart</h1><br>";

    $ITEM_ID = (int)$_POST['ITEM_ID'];
    $ITEM_QTY = (int)$_POST['ITEM_QTY'];

    $stmt = $pdo->prepare('SELECT * FROM Cart WHERE id = ?');
    $stmt->execute([$_POST['ITEM_ID']]);

    $ITEM_QTY = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($ITEM_NAME && $ITEM_QTY > 0) {
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($ITEM_ID, $_SESSION['cart'])) {
                $_SESSION['cart'][$ITEM_ID] += $ITEM_QTY;
            } else {
                $_SESSION['cart'][$ITEM_ID] = $ITEM_QTY;
            }
        } else {
            $_SESSION['cart'] = array($ITEM_ID => $ITEM_QTY);
        }
    }
    header('location: index.php?page=cart');

    echo "<form action='checkout_page.php'>";
    echo "<input type='submit' value='Checkout'/>";
    echo "</form>";
    exit;
}
?>
