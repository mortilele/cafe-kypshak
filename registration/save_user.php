<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>menu</title>
</head>

<body>

<div class="main">
	
<?php
session_start(); //replace session values into variables, if session value is empty, destroy it
    	if (isset($_POST['customer_name'])) { $customer_name = $_POST['customer_name']; if ($customer_name == '') { unset($customer_name);} 
		if (isset($_POST['customer_lastname'])) { $customer_lastname = $_POST['customer_lastname']; if ($customer_lastname == '') { unset($customer_lastname);} }
		if (isset($_POST['customer_login'])) { $customer_login = $_POST['customer_login']; if ($customer_login == '') { unset($customer_login);} }
		if (isset($_POST['customer_password'])) { $customer_password=$_POST['customer_password']; if ($customer_password =='') { unset($customer_password);} }
		if (isset($_POST['customer_email'])) { $customer_email=$_POST['customer_email']; if ($customer_email =='') { unset($customer_email);} }
		if (isset($_POST['customer_address'])) { $customer_address=$_POST['customer_address']; if ($customer_address =='') { unset($customer_address);} }
		if (isset($_POST['customer_phone_number'])) { $customer_phone_number=$_POST['customer_phone_number']; if ($customer_phone_number =='') { unset($customer_phone_number);} }
		}
	//if the client did not enter all the required data, show error message and end.
     if (empty($customer_name) or empty($customer_lastname) or empty ($customer_login) or empty($customer_password) or empty($customer_phone_number) or empty($customer_address) or empty($customer_email))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");}
    //if login and password are entered, then we process them
    $customer_name = stripslashes($customer_name);
    $customer_name = htmlspecialchars($customer_name);
	$customer_password = stripslashes($customer_password);
    $customer_password = htmlspecialchars($customer_password);
	$customer_id='';
 //remove extra spaces
    $customer_name = trim($customer_name);
    $customer_password = trim($customer_password);	
 // link to database
	$db='cafe_kypshak';
    $link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe',$db); // database address
	$query= "SELECT customer_login FROM cafe_kypshak.customer_list WHERE customer_login='".$customer_login."'";  //select and compare login from database 	
	$result = mysqli_query($link, $query);
	$myrow = mysqli_fetch_array($result);
	
    if (!empty($myrow['customer_login'])) {
    	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Извините, введённый вами логин уже зарегистрирован. Введите другой логин.')
    window.location.href='../booking/customer_details.php';
    </SCRIPT>");
 //sorry, you entered login already in database, enter other
    }
 // if there is no such, then save the data
    $query2="INSERT INTO cafe_kypshak.customer_list VALUES(null,'".$customer_name."','".$customer_lastname."','".$customer_login."','".$customer_password."','".$customer_email."','".$customer_address."','".$customer_phone_number."')";
	
	$result2 = mysqli_query ($link,$query2);
    // Check if there are any errors
    if ($result2=='TRUE')
    {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Регистрация прошла успешна! Теперь вы можете зайти на сайт как клиент')
    window.location.href='../booking/customer_details.php';
    </SCRIPT>");
exit;
    }
	else  // else show alert 404
	{
    echo "<script>alert('404.')</script>";
    }
    ?>
	

</div>
  
    </body>
	</html>