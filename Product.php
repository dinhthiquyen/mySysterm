<?php
    include 'db.php';
    $sql = "SELECT * FROM product";
    $result = pg_query($connection,$sql);
    if (pg_num_rows($result) > 0) {
    // output data of each row
    while($row = pg_fetch_assoc($result)) {
        $ProductId = $row['ProductId'];
        $Price = $row['Price'];
        $Image = $row['Image'];
        $ProductName = $row['ProductName'];
    
    ?>
    <div action="Product.php">
        <tr>
            <td>
                <a href="./Product-detail.php?ProductId=<?php echo $row["ProductId"]?>">
                    <img src= "<?php echo $row["Image"]?>" style="width: 100px; height: 100px;">
                </a>
            </td>
            
            <td>
                <span><?php echo $row["ProductName"]?></span>
            </td>

            <td>
                <span><?php echo $row["Origin"]?></span>
            </td>

            <td>
                <span> <?php echo $row["Price"]?>$</span>
            </td>

             <td>
                <span><?php echo $row["Description"]?></span>
            </td>
            <td>         
                <button type="">Update</button>
                <form action='/Delete.php' method="POST" onsubmit="return confirmDelete();">
                    <input type='hidden' name='ProductId' value='<?php echo $row['ProductId']?>'>
                    <input class="edit-btn" type='submit' value='Delete'>
                </form>
            </td>
        <tr/>
    </div>	
    <?php }} 
?>