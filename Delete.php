<?php  
include 'db.php';
$ProductId = $_GET['ProductId'];

$sql2 ="DELETE * FROM product WHERE product.ProductId = '$ProductId'";

//$result = pg_query($connection,$sql2);
$stmt = $connection->prepare($sql2);
$stmt->execute();
//$cmdtuples = pg_affected_rows($result);
//echo $cmdtuples . " record affected.\n";


?>