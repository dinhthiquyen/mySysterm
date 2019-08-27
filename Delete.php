<?php  
include 'db.php';
$productid = $_GET['productid'];

$sql2 ="DELETE FROM product where productid = " .$productid;

$result = pg_query($connection,$sql2);
$cmdtuples = pg_affected_rows($result);
echo $cmdtuples . " record affected.\n";
if (!$result) {
    $errormessage = pg_last_error();
    echo "Error with query: " . $errormessage;
    exit();
}
pg_close();

header('location:https://selling-toys.herokuapp.com/Admin.php');

?>