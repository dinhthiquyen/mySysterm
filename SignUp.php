

<?php 

    include 'db.php';
    $uname = "";
    $psw = "";

    if(isset($_POST['uname'])&& isset($_POST['psw']))
    {   
        $psw = $_POST['psw'];
        $uname = $_POST['uname'];
        
        //tạo kết nối tới csdl
        //lấy tất cả các bản ghi từ kết quả
        $sql = "INSERT INTO accountuser(username, password) VALUES ('$uname', '$psw')";

        pg_query($connection ,$sql);
        header("Location: ./index.php"); /* Redirect browser */
        
    }
?>