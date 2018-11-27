<?php
session_start(); //open session
session_unset(); //delete all variables
session_destroy(); //destroy session
ob_start(); //redirect to customer_details page
header("location:..//booking/customer_details.php");
ob_end_flush(); 
exit();
?>