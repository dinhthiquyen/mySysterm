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
        $sql = "INSERT INTO  product(productid, productname, origin, description, price )VALUES ('$Id', '$PrName', '$Origin', '$Des', '$Price')";
        pg_query($connection,$sql);
        
        header("Location: ./admin.php")
    }
?>