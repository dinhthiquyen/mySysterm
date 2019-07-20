
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
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
        <div class="bodyRightContainer" action="Product.php">
            <a href="./Product-detail2.php?ProductId=<?php echo $row["ProductId"]?>">
                <img src= "<?php echo $row["Image"]?>" style="width: 200px; height: 250px;">
            </a><br>
            <span><?php echo $row["ProductName"]?></span><br>
            <span>Ages: <?php echo $row["Age"]?></span><br>
            <span>Origin:<?php echo $row["Origin"]?></span><br>
            <span><a href="Buy.html"><img src="images/crafs.png"></a> <?php echo $row["Price"]?>$</span>
        </div>


    <?php
        }
    }
    ?>
</body>
</html>