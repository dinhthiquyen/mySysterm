<?php 

    include 'db.php';
    $Id="";
    $PrName="";
    $Origin="";
    $Des="";
    $Price="";

    if(isset($_POST['Id'])&& isset($_POST['PrName'])&& isset($_POST['Origin'])&& isset($_POST['Des'])&& isset($_POST['Price']))
    {   
        $Id = $_POST['Id'];
        $PrName = $_POST['PrName'];
        $Origin = $_POST['Origin'];
        $Des = $_POST['Des'];
        $Price = $_POST['Price'];
        //tạo kết nối tới csdl
        //lấy tất cả các bản ghi từ kết quả
        $sql = "INSERT INTO  product(productid, productname, origin, description, price)VALUES ('$Id', '$PrName', '$Origin', '$Des', '$Price')";  
        if (pg_query($connection, $sql)) {
            echo "Update succesfully"; 
            header("Location: ./admin.php"); /* Redirect browser */
        } else {
            echo "Update fail ";
        }
    }
    ?>
