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
		        <div class="oneproduct">
					<div class="faded">
					<a class="hinhproduct" href="Product_detail.php?ProductId=<?= $ProductId; ?>">
					<img src="<?= $Image; ?>" class="Image">
					<div class="middle">
				    <div class="discountbox">
				    	<p>DISCOUNT </p>
				    	<p>ONLY 
				    		<?php
				    		$Price=$row["Price"];
				    
				    		echo $Price
				    		?>$
				    	</p>
				 
				    </div>
				  </div>
				</div>
				</a>
					<div class="thongtinproduct">
						<span><?= $ProductName; ?>
							
						</span><br>
						<span class="explore" >EXPLORE NOW</span><br>
								<img src="cart.png" alt="hình giỏ hàng">
								<span><?= $Price; ?> $</span>
						
					</div>
			</div>

			
		       <?php }} 
		       ?>