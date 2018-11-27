<html>
<head>
<title>История бронирований</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../images/logo2.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="../js/goback.js"></script>
</head>
<body style="background-color:#Fefefe;overflow-x:hidden;"">
 <header> <!-- Banner, divided to 3 equal parts-->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 logotype">
          <img src="../images/322.jpg" alt="Logo"  style="width:100%"class="img-responsive">
        </div>
        <div class="col-sm-4 descript text-center" style="margin-top:30px;">
          <h2 style="font-size:40px; color:#666666;"><b>Кафе Кыпшак</b></h2>
        </div>
        <div class="col-sm-4 phone_number">
          <h2 style="text-align:right;">+7 777 497 5757</h2>
                 <p class="anim" id="anima">&mdash; Контакт &mdash;</p>
        </div>
      </div>
    </div>
  </header>
  <!--Horizontal navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>        
      </button>
      <a class="navbar-brand" href="#"; style="font-family:Astakhov Dished; font-size:170%; color:#FFF8DC"> <i class="glyphicon glyphicon-cutlery" style="font-size:80%";></i>  Кыпшак </a> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav"> 
        <li><a href="../index.php"><i class="fa fa-bars"></i> Главная</a></li>
        <li><a href="../menu/menu.php"><i class="glyphicon glyphicon-glass"></i> Меню  </a></li>
    <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
        <li><a href="../booking/customer_details.php"><i class="glyphicon glyphicon-cutlery"></i> Бронирование</a></li>
     <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
      <li><a href="#Contacts"><i class="glyphicon glyphicon-envelope"></i> Контакты</a></li>
    <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
        <li><a href="../comment/comment.php"><i class="glyphicon glyphicon-thumbs-up"></i> Отзывы</a></li>
      <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li> 
      <li><a href="../aboutus/aboutus.php"><i class="glyphicon glyphicon-certificate"></i> О нас</a></li>

  </div>
</nav>
<div class="container"> 
    <div style="width:1300px; margin:0 auto;">
    	<h3 style="font-size:30px;padding:10px;"> Ваши бронирования и заказы: </h3>
<?php
//set into variables login and book id value of sessions
if (isset($_POST['customer_login'])) {
$customer_login = $_POST['customer_login']; if ($customer_login == '') { unset($customer_login);} }
//If login didnt match, alert There is no all data
if (empty($customer_login))
{exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");}
//connect to database
$db='cafe_kypshak';
$link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe',$db);
//get all values from database where variables login, bookid are same with table data
$query= "SELECT * FROM cafe_kypshak.book_list where customer_login='".$customer_login."' order by book_id"; 
$result = mysqli_query($link, $query);
$row= mysqli_fetch_array($result);
//Display all booking details, and order details of current client
do{
  echo('<br>');      echo('<br>');
  echo('<input type="text" style="width:70px" value="№ брони"]>');
  echo('<input type="text" style="width:160px" value="Логин клиента">');
  echo('<input type="text" style="width:160px" value="Вид брони">');
  echo('<input type="text" style="width:70px" value="№ людей">');
  echo('<input type="text" style="width:100px" value="Дата брони">');
  echo('<input type="text" style="width:90px" value="Время брони">');
  echo('<input type="text" style="width:250px"value="Примечание">');
  echo('<form action="../admin/bookchange.php" method="POST">');
  echo('<input type="text" style="width:70px" name="book_id" value='.$row['book_id'].'>');
  echo('<input type="text" style="width:160px" value="'.$row['customer_login'].'">');
  echo('<input type="text" style="width:160px" value="'.$row['book_type'].'">');
  echo('<input type="text" style="width:70px"  value='.$row['number_of_people'].'>');
  echo('<input type="text" style="width:100px" value='.$row['book_date'].'>');
  echo('<input type="text" style="width:90px" value='.$row['book_time'].'>');
  echo('<input type="text" style="width:250px" value="'.$row['book_note'].'">');
  echo('<input type="submit" name="delete_book_as_customer" value="-">');
  echo('</form>');
  echo('<input type="text" style="width:70px" value="№ заказа"]>');
  echo('<input type="text" style="width:160px" value="Еда">');
  echo('<input type="text" style="width:50px" value="Кол-во">');
  echo('<input type="text" style="width:70px" value="Сумма">');;
$query2= "SELECT * FROM cafe_kypshak.orders_list where book_id='".$row['book_id']."'"; 
$result2 = mysqli_query($link, $query2);
$row2= mysqli_fetch_array($result2);
do{
  echo('<form action="../admin/bookchange.php" method="POST">');
  echo('<input type="text" style="width:70px" name="order_id" value='.$row2['order_id'].'>');
  echo('<input type="text" style="width:160px" name="food_name" value="'.$row2['food_name'].'">');
  echo('<input type="text" style="width:50px" name="quantityfood" value='.$row2['quantityfood'].'>');
  echo('<input type="text" style="width:70px" name="total" value='.$row2['total'].'>');
  echo('<input type="submit" name="delete_order" value="-">');
  echo('</form>');}
while ($row2 = mysqli_fetch_array($result2));}
while ($row = mysqli_fetch_array($result));

?>
 <button onclick="goBack()" type="submit" class="btn-danger"> <span class="glyphicon glyphicon-remove"></span> Назад</button>
</div>
</div>

</body>
</html>