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

$rs = $pdo->query("SELECT SUM(ITEM_COST) FROM Cart;");
$order_total = $rs->fetchAll(PDO::FETCH_ASSOC);
echo $order_total[0];

echo "<form action='order_confirmation' method='post'>";
echo "First Name: <input type='text' name='f_name'><br>";
echo "Last Name: <input type='text' name='l_name'><br>";
echo "Card Number: <input type='text' name='card_num'><br>";
echo "<input type='submit' name='Checkout'>";
echo "</form>";
?>