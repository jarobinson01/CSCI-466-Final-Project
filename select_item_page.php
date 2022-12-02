<?php
$id = key($_POST);

include("passwords.php");
include("functions.php");

$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

$item = $pdo->prepare("SELECT * FROM Inventory WHERE ITEM_ID = ?;");
$item->execute(array($id));

$rows = $item->fetchAll(PDO::FETCH_ASSOC);
draw_item($rows);

echo "<form action='main_page.php'>";
echo "<input type='submit' value='Home'/>";
echo "</form>";
?>
