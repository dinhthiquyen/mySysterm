
<!DOCTYPE html>
<html>
<head>
	<title>Set data</title>
	
</head>
<body>
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


    $uname = "";
    $psw = "";

    //Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["uname"])) { $uname = $_POST['uname']; }
        if(isset($_POST["psw"])) { $psw = $_POST['psw']; }
    $sql = "INSERT INTO accountuser (Username, Password)
    VALUES ('$uname', '$psw')";

    if (mysqli_query($conn, $sql)) {
            echo "Sign up succesfully"; 
            header("Location: http://localhost:8080/web/Asm/Home.php"); /* Redirect browser */
        } else {
            echo "Sign up fail ";
        }
    }

?>

</body>
</html>