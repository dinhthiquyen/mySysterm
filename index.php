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
    <div class="navbar-header" style="padding: 0; margin: 0;">
      <a  href="Home.php"><img src="" style="padding: 0; margin: 0; height: 40px; width: 90px"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cat Breeds<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php include 'Catalogy.php';?>
        </ul>
      </li>
      <li><a href="#">Toys</a></li>
      <li><a href="#">Accessories</a></li>
      <li><a href="#">Contacts</a></li>
      <li>
         <marquee style="color: #DEE836"> No: 0909092222, Email: littlestpetshop@gmail.com</marquee>
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
     <!--  <div class="h1"></div> -->
     <img src="" alt="">
    <!--   <div class="text-brand"></div> -->
      <p align="center" id="name">Cat breeds are being sold</p>
    </div>
    <div class="right">
      <h3><b>SELLING IN MY SHOP</b></h3>
      <?php include 'Product.php';?>
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
                <img src="images/scottish.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Scottish Fold Cats</h4>
                </div>
              </div>
              <div class="item">
                <img src="images/munchkin.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Aln Cats</h4>
                </div>
              </div>
              <div class="item">
                <img src="images/savannah.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Savannah Cats</h4>
                </div>
              </div>
              <div class="item">
                <img src="images/ragdoll.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Ragdoll Cats</h4>
                </div>
              </div>
              <div class="item">
                <img src="images/sphynx.jpg" alt="">
                <div class="carousel-caption">
                   <h4>Sphynx Cats</h4>
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
          <img src="images/care.jpg">
          <b>HOW TO TAKE CARE OF YOUR CATS?</b>
          </a>
        </div>
        <div class="leftContent">
          <a href="#">
          <img src="images/newcats1.jpg">
          <b>THE NEW CATS OF JULY: ALN CATS</b>
          </a>
        </div>
        <div class="leftContent">
          <a href="#">
          <img src="images/care.jpg">
          <b>THE TYPES OF PETS</b>
          </a>
        </div>
        <div class="leftContent">
          <a href="#">
          <img src="images/savannah.jpg">
          <b>THE NEW ACCESSORIES OF MAY</b>
          </a>
        </div>
        <div class="leftContent">
          <a href="#">
          <img src="images/newcats2.jpg">
          <b>THE NEW CATS OF MAY: SCOTTISH FOLD CATS </b>
          </a>
        </div>
        <div class="leftContent">
          <a href="#">
          <img src="images/ragdoll.jpg">
          <b>THE NEW TOYS OF JANUARY</b>
          </a>
        </div>
</div>
<div class="footer" >
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
</body>
</html>
