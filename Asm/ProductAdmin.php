
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
        <div class="bodyRightContainer" action="ProductAdmin.php">
            <a href="./ProductAdmin-detail2.php?ProductId=<?php echo $row["ProductId"]?>">
                <img src= "<?php echo $row["Image"]?>" style="width: 200px; height: 250px;">
            </a><br>
            <span><?php echo $row["ProductName"]?></span><br>
            <span>Ages: <?php echo $row["Age"]?></span><br>
            <span>Origin:<?php echo $row["Origin"]?></span><br>
            <span><a href="Buy.html"><img src="images/crafs.png"></a> <?php echo $row["Price"]?>$</span><br>
            <button class="btn btn-danger navbar-btn" style="width:auto; margin: 5px 20px;">Delete</button>

            <button class="btn btn-danger navbar-btn" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Update</button>
            <div id="id03" class="modal">
              <form class="modal-content animate" action="Update.php" method="POST">
                <div class="container">
                            <img src="<?php echo $row["Image"]?>" alt="Avatar" class="avatar"><br>
                     
                            <label for="PrName"><b>Product Name:</b></label>
                            <input type="text" placeholder="<?php echo $row["ProductName"]?>" name="PrName" required>
             
                            <label for="Age"><b>Ages: </b></label>
                            <input type="text" placeholder="<?php echo $row["Age"]?>" name="Age" required> 
                
                            <label for="Origin"><b>Origin:</b></label>
                            <input type="text" placeholder="<?php echo $row["Origin"]?>" name="Origin" required></td>

                            <label for="Price"><b>Price:</b></label>
                            <input type="text" placeholder="<?php echo $row["Price"]?>" name="Price" required></td>

                            <label for="Des"><b>Description:</b></label>
                            <input type="text" placeholder="<?php echo $row["Description"]?>" name="Des" required> <p style="margin-top: 10px; margin-left: 90px;"></p>

                             <button onclick="show2()" style="width: 100px;">Update</button>
                      <script type="text/javascript">
                        function show2(){
                          alert("Update Successful!");
                        }
                      </script>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
                  <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                </div>
              </form>
            </div>
            <script>
            // Get the modal
            var modal = document.getElementById('id03');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
        </div>
    <?php
        }
    }
    ?>
</body>
</html>