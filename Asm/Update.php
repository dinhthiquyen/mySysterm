<!DOCTYPE html>
<html>
<head>
	<title>Get data</title>
	
</head>
<body>

	<!-- lấy dữ liệu gửi lên phải dùng biến toàn cục $_GET hoăc $_POST -->
	<?php 

	$hostname='localhost';
    $username = 'root';
    $password = '';
    $dbname = 'asm-webdesign';

    // Create connection
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

	if(isset($_POST['PrName'])&& isset($_POST['Age'])&& isset($_POST['Origin'])&& isset($_POST['Des'])&& isset($_POST['Price']))
	{	

		$PrName = $_POST['PrName'];
		$Age = $_POST['Age'];
		$Origin = $_POST['Origin'];
		$Des = $_POST['Des'];
		$Price = $_POST['Price'];
		//tạo kết nối tới csdl
		//lấy tất cả các bản ghi từ kết quả
		$ProductId = $_GET['ProductId'];
		$sql = "UPDATE product SET ProductName='$PrName',Age='$Age', Origin='$Origin',Description='$Des', Price='$Price'
		WHERE ProductId = '.$ProductId.'";
		$rows=query($sql);
		
		if(count($rows)>0){
			echo"<h1>Log succesfully. Come back</h1>";
			header("Location: http://localhost:8080/web/Asm/Home2.php"); /* Redirect browser */
		} else
			echo"</h1>Log in fail. The account aren't exit</h1>";
	}
	else
		echo"Can't recieve username and password";
	?>
</body>
</html>