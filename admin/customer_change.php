<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>menu</title>
<link rel="stylesheet" type="text/css" href="/www/example/style.css" />
</head>

<body>

<?php
//if submitted delete button
if (isset($_POST['delete_customer'])) {
	session_start();
	//get client id
	$customer_id = $_POST['customer_id'];
	//connect to database
    $link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak');
	//delete row where id matched
    $query1="DELETE FROM cafe_kypshak.customer_list WHERE customer_id = '".$customer_id."'";
	$result1 = mysqli_query ($link,$query1);
	//check
    if ($result1=='TRUE')
		{
			echo  "<script>alert(\"Успешно удален!\");
			window.location.href='admin_user.php';</script>";
		}
	else 
		{
			echo  "<script>alert(\"Запрос не выполнен!\");
			window.location.href='admin_book.php';</script>";
		}
	}
	//if button clicked in order to change data
	else if (isset($_POST['alter_customer'])) {
		//insert into variable session values of changed data
		$customer_id = $_POST['customer_id'];
		$name=$_POST['customer_name'];
		$lastname=$_POST['customer_lastname'];
		$password=$_POST['customer_password'];
		$email=$_POST['customer_email'];
		$address=$_POST['customer_address'];
		$phone_number=$_POST['customer_phone_number'];
	//connect to database
	$link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak');
	//update old data
    $query2="UPDATE customer_list SET customer_name='$name',customer_lastname='$lastname',customer_password='$password',customer_email='$email',customer_address='$address',customer_phone_number='$phone_number' WHERE customer_id='$customer_id'";
	$result2 = mysqli_query ($link,$query2);
    //check
    if ($result2=='TRUE')
		{	
		echo  "<script>alert(\"Успешно изменен!\");
			window.location.href='admin_user.php';</script>";
		}
	else 
		{
			echo  "<script>alert(\"Запрос не выполнен!\");
			window.location.href='admin_user.php';</script>";
		}
}
?>
    </body>
	</html>
	
	
	
	