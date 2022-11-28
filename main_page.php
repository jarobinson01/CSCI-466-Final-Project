<?php
include("passwords.php");
include("functions.php");

$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

$rs = $pdo->query("SELECT * FROM Inventory;");
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);
draw_product_table($rows);

echo "<button>Track My Orders</button>";
echo "<form action='order_fulfilment.php' method='post'>";
echo "<input type='submit' value='Outstanding Orders'/>";
echo "</form>";

echo "</table>";
?>
