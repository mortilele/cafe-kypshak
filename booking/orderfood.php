<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>menu</title>
</head>

<body>

<div class="main">
	
<?php
//Insert into variables session values
if (isset($_POST['order'])) {
if (isset($_POST['food_price'])) { $food_price = $_POST['food_price']; if ($food_price == '') { unset($food_price);} }
if (isset($_POST['book_id'])) { $book_id = $_POST['book_id']; if ($book_id == '') { unset($book_id);} }
if (isset($_POST['food_name'])) { $food_name = $_POST['food_name']; if ($food_name == '') { unset($food_name);} }
if (isset($_POST['quantityfood'])) { $quantityfood=$_POST['quantityfood']; if ($quantityfood =='') { unset($quantityfood);} }
if (empty($food_price) or empty($quantityfood))
{
//if quantity didnt entered, show alert Please enter quantity
echo '<SCRIPT> 
window.alert("Введите количество")
window.location.href="preorder.php"; </SCRIPT>';}
//Find total value by multiplying food price and quantity
    $total=$quantityfood * $food_price;
//connect to database
    $db='cafe_kypshak';
    $link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe',$db); 
//insert values into table orders_list	
    $query2="INSERT INTO cafe_kypshak.orders_list VALUES(null,'".$book_id."','".$food_name."','".$quantityfood."','".$total."')";   
    $result2 = mysqli_query ($link,$query2);
//Check that data had been inserted
    if ($result2=='TRUE')
    {   
//If okay, alert successfully added and reopen the page
echo '<SCRIPT>
window.alert("Успешно добавлено '.$total.' ")
window.location.href="preorder.php";
</SCRIPT>';
exit;}
//If there is error, alert Ooops, Error
else {
	echo "<script>alert('Ooops! Error 404 xD.')</script>";}
}      ?>
	

</div>
  
    </body>
	</html>