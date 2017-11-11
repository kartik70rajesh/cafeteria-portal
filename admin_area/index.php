<?php 
session_start(); 

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>

<!DOCTYPE> 

<html>
	<head>
		<title>Admin Panel</title> 
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>


<body> 

	
	
	
		<div id="header">
			<p align="center" style="font-size: 150;color: white;">ADMINISTRATOR</p>
		</div>
		
		<div id="right">
		<h2 style="text-align:center;color: white"><strong>Manage Content</strong></h2>
			
			<a href="index.php?insert_product">Insert New Product</a>
			<a href="index.php?view_products">View All Products</a>
			<a href="index.php?insert_cat">Insert New Category</a>
			<a href="index.php?view_cats">View All Categories</a>
			<a href="index.php?view_orders">View Orders</a>
			<strong><a style="color: red;" href="index.php?add_amount">Add amount</a></strong>
			<br>
			<a style="color: grey" href="logout.php">Admin Logout</a>
		
		</div>
		
		<div id="left">
		<?php 
		if(isset($_GET['insert_product'])){
		
		include("insert_product.php"); 
		
		}
		if(isset($_GET['view_products'])){
		
		include("view_products.php"); 
		
		}
		if(isset($_GET['edit_pro'])){
		
		include("edit_pro.php"); 
		
		}
		if(isset($_GET['insert_cat'])){
		
		include("insert_cat.php"); 
		
		}
		
		if(isset($_GET['view_cats'])){
		
		include("view_cats.php"); 
		
		}

		if(isset($_GET['view_orders'])){
		
		include("view_orders.php"); 
		
		}
		
		if(isset($_GET['edit_cat'])){
		
		include("edit_cat.php"); 
		
		}


		if(isset($_GET['add_amount'])){
		
		include("add_amount.php"); 
		
		}
		
		
		?>
		</div>






	


</body>
</html>

<?php } ?>