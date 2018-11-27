<?php
//link to database
require("db.php");
//get session value and insert into variable
if(isset($_GET['comment_id'])){
	$comment_id = $_GET['comment_id'];
//delete comment from base and redirect to page
mysqli_query($con,"DELETE FROM customers_feedback WHERE comment_id='$comment_id'");
header("location: admin_delete_comment.php");
}
mysqli_close($con);
?>