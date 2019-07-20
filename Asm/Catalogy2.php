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
    $sql = "SELECT * FROM catalogy";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row1 = $result->fetch_assoc()) {
            ?>       
            <ul action="Catalogy2.php" style="list-style-type: none;">
                <a href="./Catalogy-detail2.php?CatalogyId=<?php echo $row1["CatalogyId"]?>">
                    <li><span><?php echo $row1["CatalogyName"]?></span><br></li>
                </a>
            </ul> 
    <?php
        }
    }
    ?>
</body>
</html>