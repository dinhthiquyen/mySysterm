<?php
include_once 'db.php';
if(count($_POST)>0) {
pg_query($connection,"UPDATE product set productid='" . $_POST['id'] . "', productname='" . $_POST['PrName'] . "', origin ='" . $_POST['origin'] . "', price ='" . $_POST['Price'] . "', description='" . $_POST['Des'] . "' ,email='" . $_POST['email'] . "' WHERE productid='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
header("Location: ./Admin.php");
}
$result = pg_query($connection,"SELECT * FROM product WHERE productid='" . $_GET['id'] . "'");
$row= pg_fetch_array($result);
?>
