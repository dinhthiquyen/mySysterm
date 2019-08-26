<?php
require("db.php");
$id = $_POST['ProductId'];
$sql = "DELETE FROM product WHERE ProductId = '$id'";
pg_query($connection,$sql); 
?>

<script>
    alert("Delete successfully!!");
    window.location.href = "/Admin.php";
</script>