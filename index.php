<?php
require_once "pdo.php";
session_start();
?>
<html>
<head>MyStore PHP Application</head><body>
<?php
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}
echo('<table border="1">'."\n");
$stmt = $pdo->query("SELECT id, item_name, quantity, unit_price, item_date,
  invoice_num FROM incomingtable");
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
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo ("<tr><td>");
    echo(htmlentities($row['id']));
    echo("</td><td>");
    echo(htmlentities($row['item_name']));
    echo("</td><td>");
    echo(htmlentities($row['quantity']));
    echo("</td><td>");
    echo(htmlentities($row['unit_price']));
    echo("</td><td>");
    echo(htmlentities($row['item_date']));
    echo("</td><td>");
    echo(htmlentities($row['invoice_num']));
    echo("</td><td>");
    echo('<a href="delete.php?id='.$row['id'].'">Delete</a>');
    echo("</td></tr>\n");
}
?>
</table>
<a href="add.php">Add New</a>
