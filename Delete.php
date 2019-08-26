<?php  
include 'db.php';
$ProductId = $_GET['ProductId'];

$sql2 ="DELETE * FROM product WHERE ProductId = '$ProductId'";

$result = pg_query($sql2);
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