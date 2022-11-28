<?php
include("functions.php");

$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

$rs = $pdo->query("SELECT * FROM Orders;");
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);
draw_table($rows);
?>