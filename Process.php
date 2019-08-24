<!DOCTYPE html>
<html>
<head>
	<title>Get data</title>
	
</head>
<body>
	<!-- lấy dữ liệu gửi lên phải dùng biến toàn cục $_GET hoăc $_POST -->
	<?php 
	require_once'db.php'; // link đến file php

	if(isset($_POST['uname'])&& isset($_POST['psw'])){
		$uname = $_POST['uname'];
		$psw = $_POST['psw'];
		//tạo kết nối tới csdl
		//lấy tất cả các bản ghi từ kết quả
		$sql = "select * from accountuser where Username ='" .$uname . "' and Password ='" . $psw . "'";
		$rows=pg_query($sql);
		
		if(count($rows)>0){
			echo"<h1>Log succesfully. Come back</h1>";
			if ($uname == 'quyen' && $psw == '123') {
				header("Location: https://selling-toys.herokuapp.com/Admin.php"); /* Redirect browser */
			}else header("Location: https://selling-toys.herokuapp.com/index2.php); /* Redirect browser */
		} else
			echo"</h1>Log in fail. The account aren't exit</h1>";
	}
	else
		echo"Can't recieve username and password";
	?>
</body>