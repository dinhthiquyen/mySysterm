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
				    	<p>DISCOUNT <?= $discount; ?> % </p>
				    	<p>ONLY 
				    		<?php
				    		$price=$row["Price"];
				    
				    		echo $price-($price * $discount /100);
				    		?>$
				    	</p>
				 
				    </div>
				  </div>
				</div>
				</a>
					<div class="thongtinproduct">
						<span><?= $productname; ?>
							
						</span><br>
						<span class="explore" >EXPLORE NOW</span><br>
								<img src="cart-2.png" alt="hình giỏ hàng">
								<span><?= $price; ?> $</span>
						
					</div>
			</div>

			
		       <?php }} 
		       ?>