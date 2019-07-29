 <!DOCTYPE html>
<html>
<head>
	<title>Set data</title>
	
</head>
<body>
<?php
include 'db.php';
    // Check connection
    $sql = "SELECT * FROM catalogy";
                    $result = pg_query($connection,$sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = pg_fetch_assoc($result)) {
            ?>       
            <ul action="Catalogy.php" style="list-style-type: none;">
                <a href="./Catalogy-detail.php?CatalogyId=<?php echo $row1["CatalogyId"]?>">
                    <li><span><?php echo $row1["CatalogyName"]?></span><br></li>
                </a>
            </ul> 
    <?php
        }
    }
    ?>
</body>
</html> 