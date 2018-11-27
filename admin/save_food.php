<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>menu</title>
</head>

<body>

<div class="main">
	
<?php
session_start();
        //insert into variables input form field values
    	if (isset($_POST['food_name'])) { $food_name = $_POST['food_name']; if ($food_name == '') { unset($food_name);} 
		if (isset($_POST['food_price'])) { $food_price = $_POST['food_price']; if ($food_price == '') { unset($food_price);} }
		if (isset($_POST['food_description'])) { $food_description = $_POST['food_description']; if ($food_description == '') { unset($food_description);} }
		}
	//if empty field, alert message
     if (empty($food_name) or empty($food_price))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //connect to database
	$db='cafe_kypshak';
    $link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe',$db);
	//insert into food_menu table new entered food
    $query2="INSERT INTO cafe_kypshak.food_menu VALUES(null,'".$food_name."','".$food_price."','".$food_description."')";
	//check, in order to find errors
	$result2 = mysqli_query ($link,$query2);
    if ($result2=='TRUE')
    {
	header('Location: admin.php');
exit;
    }
	else 
	{
    echo "<script>alert('404.')</script>";
    }
    ?>
	

</div>
  
    </body>
	</html>