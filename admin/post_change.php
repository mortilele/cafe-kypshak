<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>menu</title>
<link rel="stylesheet" type="text/css" href="/www/example/style.css" />
</head>

<body>

<?php
//if it's delete button
if (isset($_POST['delete_post'])) {
	session_start();
//get id value
	$post_id = $_POST['post_id'];
//connect to database
      $link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak');
//delete row where id matched
    $query1="DELETE FROM cafe_kypshak.post_content WHERE post_id = '".$post_id."'";
	$result1 = mysqli_query ($link, $query1);
//check 
    if ($result1=='TRUE')
		{
//if successful reopen the page
			echo  "<script>alert(\"Успешно удалено!\");
			window.location.href='admin_post.php';</script>";
		}
	else 
		{
//if there are errors, display alert
			echo ("Запрос не выполнен.");
		}
}
//if it's post alter button
else if (isset($_POST['alter_post'])) {
//get values
        $post_id = $_POST['post_id'];
	    $post_title = $_POST['post_title'];
		$post_text = $_POST['post_text'];
		$post_date_published=$_POST['post_date_published'];
//connect to database
		$link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak');
//Replace new values instead of old
     $query2="UPDATE post_content SET post_title='$post_title',post_date_published='$post_date_published',post_text='$post_text' WHERE post_id='$post_id'";
	$result2 = mysqli_query ($link,$query2);
// check again
    if ($result2=='TRUE')
		{	
			echo  "<script>alert(\"Успешно изменен!\");
			window.location.href='admin_post.php';</script>";
		}
	else 
		{
			echo  "<script>alert(\"Запрос не выполнен!\");
			window.location.href='admin_post.php';</script>";
	}
}
 ?>
    </body>
	</html>