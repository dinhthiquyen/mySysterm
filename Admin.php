<!DOCTYPE html>
<html lang="en">
<head>
  <title>Littelest Shop</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="Admin.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Toys Breeds<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php include 'Catalogy2.php';?>
        </ul>
      </li>
      <li><a href="#">Toys</a></li>
      <li><a href="#">Accessories</a></li>
      <li><a href="#">Contact</a></li>
      <li>
         <marquee style="color: #DEE836"> No: 0909092222, Email: littlestshop@gmail.com</marquee>
      </li>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <div id="divright">
            <form action="">
              <div id="containSearch">
                <input type="text" placeholder="Search" style="padding: 7px;border-radius: 20px;">
                <input id="btnsearch" type="submit" value="">
              </div>
            </form>
          </div>
        </li>
        <li>
          <a href="#"><span class="glyphicon glyphicon-shopping-cart" style="color: white; height: 10px; width: 10px;"></span></a>
        </li>
        <li>
          <ul style="list-style-type: none;">
            <li> <img src="images/Login2.png" style="width: 30px; height: 30px;"></li>
            <li><a href="index.php" style="color: gray;">Log out</a></li>
          </ul>
        </li> 
    </ul>   
   </ul>
  </div>
</nav>
	<div class="wallppaper">
		<div class="header">
			<div>
		      <div class="h1"></div>
		      <div class="text-brand"></div>
		      <p align="center" id="name">List of Catalogy</p>
		    </div>
		</div>

		<div class="body">
			<div class="right">
				<ul>
					<li style="background: black; color: white;">Menu</li>
					<li>Management Catalogy</li>
					<li>Management User</li>
					<li>Management Order</li>
					<li>Management Warehouse</li>
				</ul>
			</div>
			<div class="left">
				<form action='/AddProduct.php' method="POST">
                   <input type='submit' value="Add Product" class="btn btn-danger navbar-btn" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">    
                </form>
		            <div id="id03" class="modal">
		              <form class="modal-content animate" action="AddProduct.php" method="POST">
		                <div class="container">     
		                            <label for="PrName"><b>Product Name:</b></label>
		                            <input type="text" name="PrName" required>
		             
		                            <label for="Age"><b>Ages: </b></label>
		                            <input type="text" name="Age" required> 
		                
		                            <label for="Origin"><b>Origin:</b></label>
		                            <input type="text" name="Origin" required></td>

		                            <label for="Price"><b>Price:</b></label>
		                            <input type="text" name="Price" required></td>

		                            <label for="Des"><b>Description:</b></label>
		                            <input type="text" name="Des" required> <p style="margin-top: 10px; margin-left: 90px;"></p>

		                             <button style="width: 100px;">Add Product</button>
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
				<table class="table-product">
			        <tr>
			            <th>Images</th>
			            <th>Product Name</th>
			            <th>Origin</th>
			            <th>Price</th>
			            <th>Description</th>
			            <th>Action</th>
			        </tr>       
			        <?php include 'Product.php';?>
			    </table>  
			</div>
		</div>

	<div class="footer">
	  <div class="f1">
	    <h4>Abount us</h4>
	    <ul>
	      <li>Introduc Littelest Shop</li>
	      <li>Recruitment</li>
	      <li>Payment privacy policy</li>
	      <li>Privacy policy</li>
	      <li>Complaint policy</li>
	      <li>Advisory</li>
	    </ul>
	  </div>
	  <div class="f2">
	    <h4>Support custommer</h4>
	    <ul>
	      <li style="color: red;">Hotline: 029384838</li>
	      <li>Ordering guide</li>
	      <li>Transportation method</li>
	      <li>Frequently asked questions</li>
	    </ul>
	  </div>
	  <div class="f3">
	           <h4>Address</h4>
	          <ul>
	            <li>Side 1: 33 Le Duc THO</li>
	            <li>Side 2:1 Le Duc THO</li>
	          </ul>             
	      </div>
	      <div class="f4">
	        <h4>Contact</h4>
	            <ul>
	              <li><a href=""><img src="images/facebook.png"><span style="padding-left: 5px;">littestshopFacebook.com</span></a></li>
	              <li><a href=""><img src="images/gmail.png"><span style="padding-left: : 5px;">littlestshop@gmail.com</span></a></li>  
	              <li><a href=""><img src="images/twitter.png"><span style="padding-left: 5px;">littestshopTwittere.com</span></a></li>
	              <li><img src="images/phone.png"><span style="padding-left: 5px;">0909092222</span></li>
	            </ul>
	      </div>
	 </div>
	</div>
</body>
</html>