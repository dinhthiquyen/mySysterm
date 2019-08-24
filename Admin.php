<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	 <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="style.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
					<li>Management Catalogy</li>
					<li>Management User</li>
					<li>Management Order</li>
					<li>Management Warehouse</li>
				</ul>
			</div>
			<div class="left">
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
	      <li>Introduc Littelest Pets Shop</li>
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
	              <li><a href=""><img src="images/facebook.png"><span style="padding-left: 5px;">littestpestshopFacebook.com</span></a></li>
	              <li><a href=""><img src="images/gmail.png"><span style="padding-left: : 5px;">littlestpetshop@gmail.com</span></a></li>  
	              <li><a href=""><img src="images/twitter.png"><span style="padding-left: 5px;">littestpestshopTwittere.com</span></a></li>
	              <li><img src="images/phone.png"><span style="padding-left: 5px;">0909092222</span></li>
	            </ul>
	      </div>
	 </div>
	</div>
</body>
</html>