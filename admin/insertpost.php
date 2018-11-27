<?php
$post_title = $_REQUEST['post_title']; //get data
$post_text = $_REQUEST['post_text'];
//do connection to database
$con=mysqli_connect("localhost","cafe_kypshak","kypshak_cafe","cafe_kypshak");
		//Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
//insert data into post_content table 
mysqli_query($con, "INSERT INTO post_content(post_title, post_text) VALUES('$post_title', '$post_text')");

mysqli_close($con);
?>