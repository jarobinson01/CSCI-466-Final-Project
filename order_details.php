<?php
$tracking = key($_POST);

include("passwords.php");
include("functions.php");

$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

$fulfill = $pdo->prepare("SELECT * FROM Orders WHERE TRACKING_NUM = ?;");
$fulfill->execute(array($tracking));

$rows = $fulfill->fetchAll(PDO::FETCH_ASSOC);
draw_order_table($rows);

echo "<h1>Customer Name: <h2>"

echo "<form action='main_page.php'>";
echo "<input type='submit' value='Home'/>";
echo "</form>";

echo "<form action='order_info_page.php'>";
echo "<input type='submit' value='Back'/>";
echo "</form>";
?>