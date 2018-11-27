<?php
//insert values of sessions to variables
$comment_author = $_REQUEST['comment_author'];
$author_email = $_REQUEST['author_email'];
$comment_text = $_REQUEST['comment_text'];

//connect to database
require("db.php");
//insert variable values into customers_feedback table
mysqli_query($con, "INSERT INTO customers_feedback(comment_author, author_email, comment_text) VALUES('$comment_author', '$author_email', '$comment_text')");

mysqli_close($con);
?>