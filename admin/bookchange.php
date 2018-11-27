<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>menu</title>
<link rel="stylesheet" type="text/css" href="/www/example/style.css" />
</head>

<body>

<?php
if (isset($_POST['delete_book'])) {
	session_start();
//get book id value
	if (isset($_POST['book_id'])) { $book_id = $_POST['book_id']; if ($book_id == '') { unset($book_id);} }
//connect to database
    $link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak');
//delete from book_list and orders_list table row where book_id matched
    $query1="DELETE FROM cafe_kypshak.book_list WHERE book_id = '".$book_id."'";
    $query2="DELETE FROM cafe_kypshak.orders_list WHERE book_id = '".$book_id."'";
	$result1 = mysqli_query ($link, $query1);
	$result2 = mysqli_query ($link, $query2);

    // check, are there any errors
    if ($result2=='TRUE')
    {echo  "<script>alert(\"Успешно удален!\"); window.location.href='admin_book.php';</script>";}
	else 
	{echo  "<script>alert(\"Запрос не выполнен!\"); window.location.href='admin_book.php';</script>";}
}
	//if it's alter button
    else if (isset($_POST['alter_book'])) {
	//get values of changed booking details
	    $book_id = $_POST['book_id'];
	    $customer_login = $_POST['customer_login'];
		$book_type=$_POST['book_type'];
		$number_of_people=$_POST['number_of_people'];
		$book_date=$_POST['book_date'];
		$book_time=$_POST['book_time'];
		$book_note=$_POST['book_note'];
//connect to database
 $link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak');
//replace old data
$query3="UPDATE book_list SET customer_login='$customer_login',book_type='$book_type',number_of_people='$number_of_people',book_date='$book_date',book_time='$book_time',book_note='$book_note' WHERE book_id='$book_id'";
	$result3 = mysqli_query ($link,$query3);
//check, if there any errors, display error, reopen page
    if ($result3=='TRUE')
		{	
			echo  "<script>alert(\"Успешно изменен!\");
			window.location.href='admin_book.php';</script>";
		}
	else 
		{
			echo  "<script>alert(\"Запрос не выполнен!\");
			window.location.href='admin_book.php';</script>";
		}
}
//do if delete order button is submitted
else if (isset($_POST['delete_order'])) { 
    //get order id
	if (isset($_POST['order_id'])) { $order_id = $_POST['order_id']; if ($order_id == '') { unset($order_id);} }
	$link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak'); //connect to db
    $query5="DELETE FROM cafe_kypshak.orders_list WHERE order_id = '".$order_id."'"; //delete order row where id is matched
	$result5 = mysqli_query ($link, $query5); //check, in order to find errors
	 if ($result5=='TRUE')
    {echo  "<script>alert(\"Успешно удален запрос клиента!\"); window.location.href='../booking/preorder.php';</script>";}
	else {echo  "<script>alert(\"Запрос не выполнен!\");window.location.href='../booking/preorder.php';</script>";}}
 ?>
  
    </body>
	</html>
	
	
	
	