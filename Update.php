<?php 

	include 'db.php';

	if(isset($_POST['id'])&& isset($_POST['PrName'])&& isset($_POST['Origin'])&& isset($_POST['Des'])&& isset($_POST['Price']))
	{	
		$id = $_POST['id'];
		$PrName = $_POST['PrName'];
		$Age = $_POST['Age'];
		$Origin = $_POST['Origin'];
		$Des = $_POST['Des'];
		$Price = $_POST['Price'];
		//tạo kết nối tới csdl
		//lấy tất cả các bản ghi từ kết quả
		$sql = "UPDATE product SET productname='$PrName', origin='$Origin',description='$Des', price='$Price'
		WHERE productid = '$id'";
		$rows=query($sql);
		
		if(count($rows)>0){
			echo"<h1>Update succesfully. Come back</h1>";
			header("Location: ./Admin.php"); /* Redirect browser */
		} else
			echo"</h1>Update fail</h1>";
	}
	?>

