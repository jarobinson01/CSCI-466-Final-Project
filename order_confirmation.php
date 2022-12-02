<?php
include("passwords.php");
include("functions.php");

$fname = $_POST["f_name"];
$lname = $_POST["l_name"];
$email = $_POST["email"];

echo "<form action='main_page.php'>";
echo "<input type='submit' value='Home'/>";
echo "</form><br>";

echo "<form action='track_orders_page.php'>";
echo "<input type='submit' value='Track My Orders'/>";
echo "</form>";

echo "<h2>Thanks for purchasing, <h2>".$fname."!<br>";

$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

$add_customer = $pdo->prepare("INSERT IGNORE INTO Customers(F_NAME, L_NAME, EMAIL) VALUES('?', '?', '?');");
$add_customer->execute(array($tracking));
?>