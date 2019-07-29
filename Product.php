<?php
include 'db.php';
    // Check connection
    $sql = "SELECT ProductId, Image, Price, ProductName, Origin FROM product";
                    $result = pg_query($connection,$sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = pg_fetch_assoc($result)) {
            $ProductId = $row['ProductId'];
            $Price = $row['Price'];
            $Image = $row['Image'];
            $Origin = $row['Origin']
            $ProductName = $row['ProductName'];
            ?>
        <div class="bodyRightContainer" action="Product.php">
            <a href="./Product-detail.php?ProductId=<?php echo $row["ProductId"]?>">
                <img src= "<?php echo $row["Image"]?>" style="width: 200px; height: 250px;">
            </a><br>
            <span><?php echo $row["ProductName"]?></span><br>
            <span>Origin:<?php echo $row["Origin"]?></span><br>
            <span><a href="#"><img src="images/crafs.png"></a> <?php echo $row["Price"]?>$</span>
        </div>
    <?php
        }
    }
    ?>