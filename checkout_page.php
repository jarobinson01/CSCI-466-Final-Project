<?php
include("passwords.php");
include("functions.php");

echo "<form action='main_page.php'>";
echo "<input type='submit' value='Home'/>";
echo "</form><br>";

echo "<h2>Checkout</h2><br>";

$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

$rs = $pdo->query("SELECT * FROM Cart;");
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);
draw_table($rows);

//Calculate order total
$total = 0;
$rs = $pdo->query("SELECT ITEM_COST, ITEM_QTY FROM Cart;");
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {
    $total += $row[0] * $row[1];
    /*foreach($row as $item) {
        echo "<b>Order Total: <b>";
        echo $item;
        echo "<br>";
    }*/
}

//Print order total
echo "<b>Order Total: <b>";
echo $total;
echo "<br>";
/*$rs = $pdo->query("SELECT SUM(ITEM_COST) FROM Cart;");
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {
    foreach($row as $item) {
        echo "<b>Order Total: <b>";
        echo $item;
        echo "<br>";
    }
}*/

echo "<form action='order_confirmation' method='post'>";
echo "First Name: <input type='text' name='f_name'><br>";
echo "Last Name: <input type='text' name='l_name'><br>";
echo "Card Number: <input type='text' name='card_num'><br>";
echo "<input type='submit' name='Checkout'>";
echo "</form>";
?>