<?php
$con=mysqli_connect("localhost","cafe_kypshak","kypshak_cafe","cafe_kypshak");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
?>