<?php
session_start();
include("includes/db.php");
$query="truncate table orders";
$run_t = mysqli_query($con, $query);
if(session_destroy()) // Destroying All Sessions
{
header("Location: customer_login.php"); // Redirecting To Home Page
}
?>