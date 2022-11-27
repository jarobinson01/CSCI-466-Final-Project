<?php
include("passwords.php");

$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

function draw_table($rows) {
  echo "<table border=1 cellspacing=1>";
  echo "<tr>";

  foreach($rows[0] as $key => $item) {
    echo "<th>$key</th>";
  }

  foreach($rows as $row) {
    echo "<tr>";
    foreach($row as $item) {
      echo "<td>$item</td>";
    }
    echo "<td><button>Select This Item</button></td>";
    echo "<td>Qty: <input type='number'></td>";
    echo "<td><button>Add To Cart</button></td>";
    echo "</tr>";
  }

  echo "<br>";
  echo "<button>Track My Orders</button>";
  echo "<button>Outstanding Orders</button>";
}

$rs = $pdo->query("SELECT * FROM Inventory;");
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);
draw_table($rows);

echo "</table>";
?>
