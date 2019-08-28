 <?php 
    include 'db.php';

    if(isset($_POST['Id'])&&(isset($_POST['PrName'])&&  isset($_POST['Origin'])&& isset($_POST['Des'])&& isset($_POST['Price']))
    {   
        $Id = $_POST['Id'];   
        $PrName = $_POST['PrName'];
        $Origin = $_POST['Origin'];
        $Des = $_POST['Des'];
        $Price = $_POST['Price'];
        //tạo kết nối tới csdl
        //lấy tất cả các bản ghi từ kết quả
        $sql = "INSERT INTO  product (productid,productname, origin,description, price )VALUES ('$Id', '$PrName', '$Origin', '$Des', '$Price')";
        $rows=query($connection,$sql);
        
        if(count($rows)>0){
            echo"<h1>Log succesfully. Come back</h1>";
            header("Location: ./Admin.php"); /* Redirect browser */
        } else
            echo"</h1>Log in fail. The account aren't exit</h1>";
    }
    else
        echo"Can't recieve username and password";
    ?>