<?php 

    include 'db.php';
    $Id="";
    $PrName="";
    $Origin="";
    $Des="";
    $Price="";

    if(isset($_GET['Id'])&& isset($_GET['PrName'])&& isset($_GET['Origin'])&& isset($_GET['Des'])&& isset($_GET['Price']))
    {   
        $Id = $_GET['Id'];
        $PrName = $_GET['PrName'];
        $Origin = $_GET['Origin'];
        $Des = $_GET['Des'];
        $Price = $_GET['Price'];
        //tạo kết nối tới csdl
        //lấy tất cả các bản ghi từ kết quả
        $sql = "INSERT INTO  product(productid, productname, origin, description, price)VALUES ('$Id', '$PrName', '$Origin', '$Des', '$Price')";  

        pg_query($connection ,$sql);
        header("Location: ./Admin.php"); /* Redirect browser */
        
    }
    ?>
