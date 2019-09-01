<?php 

	include 'db.php';
	$id="";
	$PrName="";
    $Origin="";
    $Des="";
    $Price="";

	if(isset($_POST['id'])&& isset($_POST['PrName'])&& isset($_POST['Origin'])&& isset($_POST['Des'])&& isset($_POST['Price']))
	{	
		$id = $_POST['id'];
		$PrName = $_POST['PrName'];
		$Origin = $_POST['Origin'];
		$Des = $_POST['Des'];
		$Price = $_POST['Price'];
		//tạo kết nối tới csdl
		//lấy tất cả các bản ghi từ kết quả
		$sql = "UPDATE product SET productname='$PrName', origin='$Origin', description='$Des', price='$Price'
		WHERE productid = '$id'";	
		if (pg_query($connection, $sql)) {
            echo "Sign up succesfully"; 
            header("Location: ./admin.php"); /* Redirect browser */
        } else {
            echo "Sign up fail ";
        }
	}
	?>

