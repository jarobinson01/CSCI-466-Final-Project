<?php

include("passwords.php");
include("functions.php");

// home and checkout buttons
echo "<form action='main_page.php'>";
echo "<input type='submit' value='Home'/>";
echo "</form><br>";

echo "<form action='checkout_page.php'>";
echo "<input type='submit' value='Checkout'/>";
echo "</form>";

echo "<h1>Cart</h1><br>";

// display cart items
$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

$rs = $pdo->query("SELECT * FROM Cart;");
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);
draw_table($rows);

$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

?>
