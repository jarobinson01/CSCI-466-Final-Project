<?php

$tracking = key($_POST);

include("passwords.php");
include("functions.php");

$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

$rs = $pdo->query("SELECT * FROM Inventory WHERE Item_ID;");
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);
draw_product_table($rows);

echo "<form action='main_page.php'>";
echo "<input type='submit' value='Home'/>";
echo "</form>";

echo "<h1>Item Selected</h1><br>";







?>
