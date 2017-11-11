<!DOCTYPE html>
<html>
<head>
	<?php
	session_start();
	include("includes/db.php");
		if(!isset($_SESSION['customer_email'])){
		header("location: customer_login.php");
		}
									$user=$_SESSION['customer_email'];
							$query4="SELECT sum(p_price) FROM orders WHERE customer_prn='$user'";
							$runQuery4=mysqli_query($con,$query4);
								while($row=mysqli_fetch_assoc($runQuery4)){
								$sum=$row['sum(p_price)'];
		}
	?>
	<title>Full Menu</title>
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
      <link href="themes/assets/css/carousel.css" rel="stylesheet">
      <style type="text/css">
       body{
       background-image: url("images/bg1.jpg");
       background-size: 100%;

    }
    
  </style>
</head>


<body>

	<div class="navbar-wrapper" >
      <div class="navbar navbar-inverse navbar-static-top " role="navigation">
        <h2 align="center" style="color: white">FULL MENU</h2> 
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse ">
            <span class="sr-only">Toggle navigation</span>
          </button>
                  <a class="navbar-brand" href="index.html"></a>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about_us.php">About Us</a></li>
              <li><a href="full_menu.php">Full Menu</a></li>
              <li class='active'><a href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>



      <table cellpadding="20" cellspacing="20" align="center" style="color: white">
      	<tr style="margin-left: 2em;" bgcolor="black">
      		<th>No.</th>
      		<th>Name</th>
      		<th>Price</th>
      		<th>Add to cart</th>
      	</tr>
			<?php

				$i=0;
				$query="SELECT *FROM products";

				$runQuery=mysqli_query($con,$query);


				while($row=mysqli_fetch_assoc($runQuery)){
					$productName=$row['product_title'];
					$price=$row['product_price'];
					$id=$row['product_id'];
					$i++;


				echo '

					<tr style="margin-left: 2em;" >
						<td>'.$i.'</td>
						<td>'.$productName.'</td>
						<td>'.$price.'</td>
						<td align="center"><a href="full_menu.php?product_id='.$id.'"><button type="button" name="call" class="btn btn-primary">'.$price.'</button></a></td>
					</tr>



					';


				}




			?>
			</table><br><br>
			<?php
				if(isset($_GET['product_id'])){


						$id=$_GET['product_id'];

						$query="SELECT *FROM products WHERE product_id=".$id;
						$runQuery=mysqli_query($con,$query);
						while($row=mysqli_fetch_assoc($runQuery)){
							$productName=$row['product_title'];
							$price=$row['product_price'];

							$query1="INSERT INTO orders (p_id,p_name,p_price,customer_prn) VALUES ('$id','$productName','$price','$user')";
							$runQuery1=mysqli_query($con,$query1);
							
						}
				}

				if(isset($_GET['call'])){
					$query3="SELECT sum(p_price) FROM orders WHERE customer_prn='$user'";
					$runQuery3=mysqli_query($con,$query);
						while($row=mysqli_fetch_assoc($runQuery3)){
							$sum=$row['sum(p_price)'];

							header("location: full_menu.php");
						}



						
				}
							?>
							<center><span><p style="color: white">Current Cart amount : <?php 
							      
							  
							      if($sum!=0) echo $sum;

			      ?></p>
			  	  </span>
				<form method="POST" action="formpro.php">
					<input type="submit" class="btn btn-success" value="FINALIZE ORDER" name="sub">
					<input type="hidden" name="hid" value= <?php echo $sum;?> >
				</form></center>






</body>
</html>