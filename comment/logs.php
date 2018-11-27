<?php
//connect to database
require("db.php");
//receive all comments data from customers_feedback table
$result = mysqli_query($con, "SELECT * FROM customers_feedback ORDER BY comment_id ASC");
//change timestamp format to show only date
while($row=mysqli_fetch_array($result)){
	 $comment_date=$row['comment_date_publish'];
$comment_date = date( "m/d/Y", strtotime($comment_date));
//display each comment to div section called comments_content
echo "<div class='comments_content'>";
//display comment date
echo "<h4 style='font-size:14px; 
	font-family:Verdana, Geneva, sans-serif;
	text-decoration:none;
	float:right;
	padding:4px;	
	border: 3.5px solid transparent; border-image: url(border.jpg) 30 round; 
	background-color:white;color:black !important;'>     
	<span class='glyphicon glyphicon-calendar'></span>" . $comment_date . "</h4>";
//display comment author
echo "<h3 style='border-bottom: 2px solid black;text-align:center'>" . $row['comment_author'] . "</h3>";
//display comment text	
echo "<h3 style=' border: 10px solid transparent;font-size:15px;	
padding: 15px;border-image: url(border.png) 30 round;background-color:#fefefe;'>" . $row['comment_text'] . "</h3>";
echo "</div>";
}	
mysqli_close($con);
?>