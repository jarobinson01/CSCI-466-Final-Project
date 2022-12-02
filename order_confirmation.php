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

echo "<h2>Thanks for purchasing, ".$fname."!<h2><br>";

$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

// add customer to database
$add_customer = $pdo->prepare("INSERT IGNORE INTO Customers(F_NAME, L_NAME, EMAIL) VALUES('?', '?', '?');");
$add_customer->execute(array($fname, $lname, $email));

// add order to database
$total = 0;
$cust_id = "";
$rs = $pdo->query("SELECT ITEM_COST, ITEM_QTY FROM Cart;");
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {
    $total += $row['ITEM_COST'] * $row['ITEM_QTY'];
}

$find_customer = $pdo->prepare("SELECT * FROM Customers WHERE EMAIL = ?;");
$find_customer->execute(array($email));
$rows = $find_customer->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {
    $cust_id += $row['CUST_ID'];
}

$add_order = $pdo->prepare("INSERT IGNORE INTO Orders(CUST_ID, ORDER_COST, ORDER_STATUS) VALUES('?', '?', 'PROCESSING');");
$add_customer->execute(array($cust_id, $total));
?>