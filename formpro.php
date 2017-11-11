<?php
session_start();
include("includes/db.php");
$user=$_SESSION['customer_email'];
$sum=$_POST['hid'];
$query3="SELECT * from customers WHERE customer_prn='$user'";

					$runQuery4=mysqli_query($con,$query3);
						while($row=mysqli_fetch_assoc($runQuery4)){
						$amount=$row['amount'];
					}
					if($amount>=$sum){
					$query3="UPDATE customers SET amount=amount-'$sum' WHERE customer_prn='$user'";
					$runQuery3=mysqli_query($con,$query3);

					$query3="SELECT * from orders WHERE customer_prn='$user'";
					$runQuery4=mysqli_query($con,$query3);
					while($row=mysqli_fetch_assoc($runQuery4)){
						$id=$row['p_id'];
						$productName=$row['p_name'];
						$price=$row['p_price'];
						$user=$row['customer_prn'];


						$query1="INSERT INTO orders_admin (p_id,p_name,p_price,customer_prn) VALUES ('$id','$productName','$price','$user')";
						$runQuery1=mysqli_query($con,$query1);
					}
					
					$query="TRUNCATE table orders";
					$run_t = mysqli_query($con, $query);
					echo "<script>alert('Placed')</script>";
					echo "<script>window.open('index.php');</script>";
					echo"<script>close();</script>";
				}else
				{echo "<script>alert('Insufficient balance')</script>";
				echo "<script>window.open('full_menu.php');</script>";
					echo"<script>close();</script>";
				}
					?>				}
