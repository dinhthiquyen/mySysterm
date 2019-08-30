
 <?php 
	require_once 'db.php'; // link đến file php

	if(isset($_POST['uname'])&& isset($_POST['psw'])){
		$uname = $_POST['uname'];
		$psw = $_POST['psw'];
		$sql = "select * from accountuser where username ='" .$uname . "' and password ='" . $psw . "'";
		$rows=pg_query($connection,$sql);
		
		if(count($rows)>0){
			echo"<h1>Log succesfully. Come back</h1>";
			if ($uname == 'quyen' && $psw == '123') {
				header("Location: https://selling-toys.herokuapp.com/Admin.php"); /* Redirect browser */
			}else header("Location: https://selling-toys.herokuapp.com/index.php"); /* Redirect browser */
		} else {echo"</h1>Log in fail. The account aren't exit</h1>";}
	}
	else {echo"Can't recieve username and password";}
	?>