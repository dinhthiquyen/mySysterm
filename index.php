<!DOCTYPE html>
<html lang="en">
<head>
  <title>Littelest PetS Shop</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="HomeCss.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="Home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cat Breeds<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php include 'Catalogy.php';?>
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
            <form action="timkiem.java">
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
          <button class="btn btn-danger navbar-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
            <div id="id01" class="modal">
              
              <form class="modal-content animate" action="signup.php" method="POST">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                    
                  <button type="submit">Sign up</button>
                  <!-- <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label> -->
                </div>

                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                </div>
              </form>
            </div>

            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
        </li>
        <li>
          <button class="btn btn-danger navbar-btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>
            <div id="id02" class="modal">
              
              <form class="modal-content animate" action="Process.php" method="POST">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                    
                  <button type="submit">Login</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
              </form>
            </div>

            <script>
            // Get the modal
            var modal = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
        </li>
    </ul>   
   </ul>
  </div>
</nav>
<div class="wallppaper">
    <div>
      <div class="h1"></div>
      <div class="text-brand"></div>
      <p align="center" id="name">Toys breeds are being sold</p>
    </div>
    <div class="right">
      <h3><b>SELLING IN MY SHOP</b></h3>
      <?php include 'ProductView.php';?>
    </div>
    <div class="left">
      <div class="container">
          <br>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators have 3 ovel -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li><!-- dât-taget ovel, dât-slide-to transport-->
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="images/product1.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Easy-Bake Oven</h4>
                </div>
              </div>
              <div class="item">
                <img src="images/product2.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Robotic dogs</h4>
                </div>
              </div>
              <div class="item">
                <img src="images/product3.jpg" alt="">
                <div class="carousel-caption">
                  <h4>LEGO Mindstorms NXT</h4>
                </div>
              </div>
              <div class="item">
                <img src="images/product4.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Art dolls</h4>
                </div>
              </div>
              <div class="item">
                <img src="images/product5.jpg" alt="">
                <div class="carousel-caption">
                   <h4>Shrinky Dinks</h4>
                </div>
              </div>       
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>
    </div>
    <b style="font-size: 20px;"> You can be care</b>
        <div class="leftContent">
          <a href="#">
          <img src="images/product1.jpg">
          <b>HOW TO TAKE CARE OF YOUR TOYS?</b>
          </a>
        </div>
        <div class="leftContent">
          <a href="#">
          <img src="images/product2.jpg">
          <b>THE NEW Toy OF JULY</b>
          </a>
        </div>
        <div class="leftContent">
          <a href="#">
          <img src="images/product6.jpg">
          <b>THE TYPES OF TOYS</b>
          </a>
        </div>
        <div class="leftContent">
          <a href="#">
          <img src="images/product4.jpg">
          <b>THE NEW ACCESSORIES OF MAY</b>
          </a>
        </div>
        <div class="leftContent">
          <a href="#">
          <img src="images/product2.jpg">
          <b>THE NEW PETS OF MAY </b>
          </a>
        </div>
        <div class="leftContent">
          <a href="#">
          <img src="images/product3.jpg">
          <b>THE NEW TOYS OF JANUARY</b>
          </a>
        </div>
</div>
<div class="footer" >
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
</body>
</html>
