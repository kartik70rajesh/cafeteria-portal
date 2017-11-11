<?php 
			include("includes/db.php");
			session_start();
			if(isset($_POST['login'])){
			
				$c_prn = $_POST['prn'];
				$c_pass = $_POST['pass'];
				
				$sel_c = "SELECT * from customers where customer_pass='$c_pass' AND customer_prn='$c_prn'";
				
				$run_c = mysqli_query($con, $sel_c);
				
				$check_customer = mysqli_num_rows($run_c); 
				
				if($check_customer==0){
				
				echo "<script>alert('PRN or password is incorrect, please try again!')</script>";
				
				}
				
				 
				
				if($check_customer>0 ){
				
				$_SESSION['customer_prn']=$c_prn; 
				header("Location: home.php");
				}
				
			}
		?>