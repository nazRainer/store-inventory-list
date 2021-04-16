<?php
require_once "pdo.php";
session_start();

if (isset($_POST['Submit'])) {
    try {
        $sql = "INSERT INTO incomingtable (id, item_name, quantity, unit_price, item_date, invoice_num)
        VALUES ({$_POST['id']}, '{$_POST['item_name']}', {$_POST['quantity']}, {$_POST['unit_price']},
          '{$_POST['item_date']}', '{$_POST['invoice_num']}')";
        // use exec() because no results are returned
        $pdo->exec($sql);
        echo "<h4 style='color:green'>New record created successfully</h4>";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
}
?>
<html>
<head>Add New Item</head>
<body>
    <?php
    if (isset($_SESSION['error'])) {
        echo '<p style="color:red">' . $_SESSION['error'] . "</p>\n";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo '<p style="color:green">' . $_SESSION['success'] . "</p>\n";
        unset($_SESSION['success']);
    }
    echo ('<table border="1">' . "\n");
    $stmt = $pdo->query("SELECT id, item_name, quantity, unit_price, item_date, invoice_num
       FROM incomingtable");
    echo ("<tr><th>");
    echo ("ID");
    echo ("<th>");
    echo ("Item");
    echo ("<th>");
    echo ("Quantity");
    echo ("<th>");
    echo ("Unit Price");
    echo ("<th>");
    echo ("Date");
    echo ("<th>");
    echo ("Invoice");
    echo ("<tr>");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo ("<tr><td>");
        echo (htmlentities($row['id']));
        echo ("</td><td>");
        echo (htmlentities($row['item_name']));
        echo ("</td><td>");
        echo (htmlentities($row['quantity']));
        echo ("</td><td>");
        echo (htmlentities($row['unit_price']));
        echo ("</td><td>");
        echo (htmlentities($row['item_date']));
        echo ("</td><td>");
        echo (htmlentities($row['invoice_num']));
        echo ("</td></tr>\n");
    }
    ?>
    </table>
    <form action="" method="post">
      <p>
          <label for="ID">ID:</label>
          <input type="text" name="id" id="id">
      </p>
        <p>
            <label for="Item">Item:</label>
            <input type="text" name="item_name" id="item_name">
        </p>
        <p>
            <label for="Quantity">Quantity:</label>
            <input type="text" name="quantity" id="quantity">
        </p>
        <p>
            <label for="Unit Price">Unit Price:</label>
            <input type="text" name="unit_price" id="unit_price">
        </p>
        <p>
            <label for="Date">Date:</label>
            <input type="text" name="item_date" id="item_date">
        </p>
        <p>
            <label for="Invoice">Invoice:</label>
            <input type="text" name="invoice_num" id="invoice_num">
        </p>
        <input type="submit" name="Submit" value="Insert New Record">
    </form>
