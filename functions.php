<?php
$dsn = "mysql:host=courses;dbname=z1934222";
$pdo = new PDO($dsn, $username, $password);

function draw_product_table($rows) {
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
    $qty = array($item['ITEM_QTY']);

    echo "<td><button>Select This Item</button></td>";
    echo "<td>Qty: ".$qty."<input type='number' min='1' value='1'></td>";
    echo "<td><button>Add To Cart</button></td>";
    echo "</tr>";
  }
}

function draw_order_table($rows) {
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
      echo "<td><button id=''>Fulfill Order</button></td>";
      echo "</tr>";
    }
}

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
    }
}
?>