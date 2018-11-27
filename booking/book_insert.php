<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>menu</title>
</head>

<body>

<div class="main">
	
<?php
session_start();
		if (isset($_POST['customer_login'])) { $customer_login = $_POST['customer_login']; if ($customer_login == '') { unset($customer_login);} }
		if (isset($_POST['book_type'])) { $book_type=$_POST['book_type']; if ($book_type =='') { unset($book_type);} }
		if (isset($_POST['number_of_people'])) { $number_of_people=$_POST['number_of_people']; if ($number_of_people =='') { unset($number_of_people);} }
		if (isset($_POST['book_date'])) { $book_date=$_POST['book_date']; if ($book_date =='') { unset($book_date);} }
		if (isset($_POST['book_time'])) { $book_time=$_POST['book_time']; if ($book_time =='') { unset($book_time);} }
		if (isset($_POST['book_note'])) { $book_note=$_POST['book_note']; if ($book_note =='') { unset($book_note);} }
		
	//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
     if (empty($customer_login) or empty($book_date) or empty ($book_time) or empty($number_of_people) or empty($book_type)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $book_type = stripslashes($book_type);
    $book_type = htmlspecialchars($book_type);
	
	
	$book_id='';
 //удаляем лишние пробелы
    $book_type = trim($book_type);
 // подключаемся к базе
    
	$db='cafe_kypshak';
    $link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe',$db);
 
	$query= "SELECT book_date FROM cafe_kypshak.book_list WHERE book_date='".$book_date."'";   		

		
	$result = mysqli_query($link, $query);
    
	$myrow = mysqli_fetch_array($result);
	
    if (!empty($myrow['book_date'])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Not free')
    window.location.href='book.php';
    </SCRIPT>");
exit;
    }
 // если такого нет, то сохраняем данные
    $query2="INSERT INTO cafe_kypshak.book_list VALUES(null,'".$customer_login."','".$book_type."','".$number_of_people."','".$book_date."','".$book_time."','".$book_note."')";
	
	$result2 = mysqli_query ($link,$query2);
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {   
          $last_id = $link->insert_id;

        $_SESSION["last_id"]=$last_id;
    	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Успешный запрос бронирования')
    window.location.href='preorder.php';
    </SCRIPT>");
exit;
    }
	else 
	{
    echo "<script>alert('Ooops! Error 404 xD.')</script>";
    }
    ?>
	

</div>
  
    </body>
	</html>