<?php  
include 'db.php';
$ProductId = $_GET['ProductId'];

$sql2 ="DELETE FROM product WHERE ProductId = '$ProductId'";

pg_query($connection, $sql2);

header('location:https://selling-toys.herokuapp.com/Admin.php');

?>