<?php
    include 'db.php';
    $sql = "SELECT * FROM product";
    $result = pg_query($connection,$sql);
    if (pg_num_rows($result) > 0) {
    // output data of each row
    while($row = pg_fetch_assoc($result)) {
    
    ?>
    <div action="Product.php">
        <tr>
            <td>
                <a href="./Product-detail.php?productid=<?php echo $row["productid"]?>">
                    <img src= "<?php echo $row["image"]?>" style="width: 100px; height: 100px;">
                </a>
            </td>
            
            <td>
                <span><?php echo $row["productname"]?></span>
            </td>

            <td>
                <span><?php echo $row["origin"]?></span>
            </td>

            <td>
                <span> <?php echo $row["price"]?>$</span>
            </td>

             <td>
                <span><?php echo $row["description"]?></span>
            </td>
            <td>         
                <button type="">Update</button>
                <a href="./Delete.php?productid=<?php echo $row["productid"]?>"><button type="">Delete</button></a>
            </td>
        <tr/>
    </div>	
    <?php }} 
?>