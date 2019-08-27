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
               <a href="./Update.php?productid=<?php echo $row["productid"]?>"> <button class="btn btn-danger navbar-btn" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Update</button> </a>
            <div id="id04" class="modal">
              <form class="modal-content animate" action="Update.php" method="POST">
                <div class="container">
                    <img src="<?php echo $row["image"]?>" alt="Avatar" class="avatar"><br>
                    Product Name: <br>
                    <input type="text" name="PrName" class="txtField" value="<?php echo $row["productname"];?>">
                    <br>
                    Origin<br>
                    <input type="text" name="Origin" class="txtField" value="<?php echo $row["origin"];?>">
                    <br>
                    Price<br>
                    <input type="text" name="Price" class="txtField" value="<?php echo $row["price"];?>">
                    <br>
                    Description::<br>
                    <input type="text" name="Des" class="txtField" value="<?php echo $row["description"];?>">
                    <br>
                    <input type="submit" name="submit" value="Submit" class="buttom">
                </div>

                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
                  <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                </div>
              </form>
            </div>
            <script>
            // Get the modal
            var modal = document.getElementById('id04');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
                <a href="./Delete.php?productid=<?php echo $row["productid"]?>"><button type="">Delete</button></a>
            </td>
        <tr/>
    </div>	
    <?php }} 
?>