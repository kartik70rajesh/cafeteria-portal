<!DOCTYPE html>
<html lang="en">
  <head>
<?php
include("includes/db.php");
session_start();
if(!isset($_SESSION['customer_email'])){
header("location: customer_login.php");
}

?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
        <link rel="stylesheet" href="css/style.css">
        <link href="themes/assets/css/carousel.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="themes/dist/js/bootstrap.min.js"></script>
        <script src="themes/assets/js/holder.js"></script>
  </head>

<body>


  
    <div class="navbar-wrapper">
      <div class="navbar  navbar-static-top " role="navigation">
        <a href="http://www.siesgst.edu.in/"><img style="padding-left: 10px;padding-top: 5px" src="images/gst.png" align="left"></a>
        <img src="images/canteen3.png" align="right" width="150px" height="100px" style="padding-right: 10px">
        <h1 align="center">Canteen Management System</h1> <br><br>
        <div class="navbar navbar-inverse nomar" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse ">
            <span class="sr-only">Toggle navigation</span>
          </button>
              
          <div class="navbar-collapse collapse nomar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about_us.php">About Us</a></li>
              <li><a href=<?php if(isset($_SESSION['customer_email']))echo "'logout.php'"; else echo "'customer_login.php'"?>><?php if(isset($_SESSION['customer_email']))echo "Sign Out"; else echo "Sign In"?></a></li>
              <li><a href="full_menu.php">Full Menu</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
       
        
        
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/canteen13.png" alt="college" style="width:100%;height: 400px">
      </div>

      <div class="item">
        <img src="images/canteen2.png" alt="canteen" style="width:100%; height: 400px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" >
      <span class="glyphicon glyphicon-chevron-left" ></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only" >Next</span>
    </a>
  </div>
    
 

      <div class="navbar navbar-inverse navbar-static-top " role="navigation">
        <a href="full_menu.php"><h2 align="center" style="color: white">SPECIALS</h2> </a>
        </div>
        <div class="row">
          <div class="col-lg-4" align="center">
            <img class="img-circle" src="images/masaladosa.png" width="500" height="300">
            <br><br><h2>MASALA DOSA
            <p><a class="btn btn-primary" href="full_menu.php" role="button"> &#8377; 30 ADD TO CART &raquo;</a></p></h2>
          </div><!-- /.col-lg-4 --> 
          <div class="col-lg-4" align="center">
            <img class="img-circle" src="images/sandwich.png"  width="500" height="300">
            <br><br><br><br><br><br><h2>SANDWICH</h2>
            <p><a class="btn btn-primary" href="full_menu.php" role="button"> &#8377;30 ADD TO CART &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" align="center">
            <img class="img-circle" src="images/oreo_3.png" width="500" height="300">
            <h2>MILKSHAKES</h2>
            <p><a class="btn btn-primary" href="full_menu.php" role="button"> &#8377;30 ADD TO CART &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
  
  
  
  
  
  
  
  
<!--Breakfast Carousel-->
  <div class="navbar navbar-inverse navbar-static-top " role="navigation">
    <a href="full_menu.php"><h2 class="itemsTitle" style=" color: white" align="center">BREAKFAST</h2></a>
  </div>
      <div id="myCarousel1" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
            <div class="col-lg-4" align="center">
              <img src="images/idli.png" alt="freshs items" width="500" height="350">
              <h4>IDLI</h4>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" align="center">
              <img src="images/poha.png" alt="Generic placeholder image" width="500" height="350">
              <br><br><h4>POHA</h4>
                          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" align="center">
              <img src="images/dosa.png" alt="Generic placeholder image" width="500" height="350">
              <h4>DOSA</h4>
                          </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>
        <div class="item">
          <div class="row">
            <div class="col-lg-4" align="center">
              <img src="images/vada_pav.png" alt="Generic placeholder image" width="500" height="350">
              <h4>VADA PAV</h4>
                          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" align="center">
              <img src="images/upma.png" alt="Generic placeholder image" width="500" height="350">
              <h4>UPMA</h4>
             
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" align="center">
              <img src="images/medu_vada.png" alt="Generic placeholder image" width="500" height="350">
              <h4>MEDU VADA</h4>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>
      </div>
      <!-- RIGHT LEFT CONTROLS-->
      <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel1" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>


      <p align="center"><a class="btn btn-success btn-lg"  href="full_menu.php" role="button">&nbsp;&nbsp;&nbsp; View FULL MENU &nbsp;&nbsp;&nbsp;</a></p>
<!--Lunch Carousel-->
  <div class="navbar navbar-inverse navbar-static-top " role="navigation">
    <a href="full_menu.php"><h2 class="itemsTitle" style="color: white" align="center">LUNCH</h2></a>
  </div>
      <div id="myCarousel2" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active" align="center">
          <div class="row">
            <div class="col-lg-4">
              <img src="images/rice.png" alt="Generic placeholder image"  width="500" height="350">
              <h4>FRIED RICE</h4>
                          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="images/thali.png" alt="Generic placeholder image"  width="500" height="350">
              <h4>THALI</h4>
                          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="images/noodle.png" width="500" height="350">
              <h4>NOODLES</h4>
             
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>
        <div class="item" align="center">
          <div class="row">
            <div class="col-lg-4">
              <img src="images/lassi.png" alt="Generic placeholder image"  width="500" height="350">
              <h4>LASSI</h4>
             
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="images/pav.png" alt="Generic placeholder image"  width="500" height="350">
              <h4>MISAL PAV</h4>
                          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="images/pav_bhaji.png" alt="Generic placeholder image" width="500" height="350">
              <h4>PAV BHAJI</h4>
             
            </div><!-- /.col-lg-4 -->
          </div>
        </div>
      </div>
        <!-- RIGHT LEFT CONTROLS-->
          <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel2" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>


      </div>



      <!-- FOOTER -->
      <footer>
    <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 SIES.GST&middot; <a href="#">CMS</a> &middot;</p>
    </div>
      </footer>

    
       

       
  </body>
</html>
