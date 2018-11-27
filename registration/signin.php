<?php
   session_start();
		$con = mysqli_connect("localhost","cafe_kypshak","kypshak_cafe","cafe_kypshak");
		$customer_login =($_POST['customer_login']);
		$customer_password =$_POST['customer_password'];
//connect to database, and insert into variables received session data
		$sql = "SELECT customer_login, customer_password from customer_list where customer_login='$customer_login' ";
//select client login from database where entered login is same
		$result = $con->query($sql);
		if (empty($_SESSION['customer_login']) or empty($_SESSION['customer_password'])) 
    { 
//if login and password are empty or not match in database, show alert incorrect login or password
        echo "<script>alert(\"Неправильный логин или пароль.\"); window.location.href='../booking/customer_details';</script>"; 
    }
		if ($result->num_rows > 0) {
//if entered login and password are same as admin login,password redirect to admin page
			$row = $result->fetch_assoc();
						
			if ($customer_login=='cafe_kypshak' and $customer_password=='kypshak_cafe')
			{
			header('location:../admin/admin.php');
//if entered login and password are match in database redirect to book.php	
			} 
		else			
			if ($row['customer_password']==$customer_password)
			{
			$_SESSION["customer_login"]=$customer_login;
			header('location:../booking/book.php');
			
			} 
		}
	   $con->close();
	?>
	

	

	