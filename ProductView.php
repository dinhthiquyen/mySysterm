<?php
    include 'db.php';
    $sql = "SELECT * FROM product";
    $result = pg_query($connection,$sql);
    if (pg_num_rows($result) > 0) {
    // output data of each row
    while($row = pg_fetch_assoc($result)) {
    ?>
    <div class="bodyRightContainer" action="ProductView.php">
            <a href="./Product-detail.php?productid=<?php echo $row["productid"]?>">
                <img src= "<?php echo $row["image"]?>" style="width: 200px; height: 250px;">
            </a><br>
            <span><?php echo $row["productname"]?></span><br>
            <span>Origin:<?php echo $row["origin"]?></span><br>
            <span><a href="Buy.html"><img src="images/crafs.png"></a> <?php echo $row["price"]?>$</span>
    </div>
    <?php }} 
?>