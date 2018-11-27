<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>menu</title>
<link rel="stylesheet" type="text/css" href="/www/example/style.css" />
</head>

<body>

<?php
//do if delete button submitted
if (isset($_POST['delete_food'])) {
	session_start();
	//get food id value
	if (isset($_POST['food_id'])) { $food_id = $_POST['food_id']; if ($food_id == '') { unset($food_id);} }
    //connect to database
    $link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak');
	//delete food from table where id matched
    $query1="DELETE FROM cafe_kypshak.food_menu WHERE food_id = '".$food_id."'";
	$result1 = mysqli_query ($link, $query1);
	//check errors
    if ($result1=='TRUE'){
    echo  "<script>alert(\"Успешно удален!\"); window.location.href='admin_menu.php';</script>";}
	else {
			echo  "<script>alert(\"Запрос не выполнен!\");
			window.location.href='admin_menu.php';</script>";}}
    else if (isset($_POST['alter_food'])) { //if alter data button submitted do
	$food_id = $_POST['food_id']; //get values of changed data from form
	$food_name = $_POST['food_name']; $food_price=$_POST['food_price'];
	//link to db
    $link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak');
	//Update old data from table
    $query2="UPDATE food_menu SET food_name='$food_name',food_price='$food_price' WHERE food_id='$food_id'";
	$result2 = mysqli_query ($link,$query2);
    if ($result2=='TRUE') //Check errors
	{echo  "<script>alert(\"Успешно изменен!\"); window.location.href='admin_menu.php';</script>";}
	else {echo  "<script>alert(\"Запрос не выполнен!\");window.location.href='admin_menu.php';</script>";}}
 ?>
  
    </body>
	</html>
	
	
	
	