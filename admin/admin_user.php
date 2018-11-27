<html>
<head>
<title>Удаление брони</title>
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
           <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li> 
       <li><a href="admin.php"><i class=" glyphicon glyphicon-cog"></i> Страница администратора </a></li>

  </div>
</nav>
<div class="container"> 
    <div style="width:1700px; margin:0 auto;">
	 <h3 style="font-size:30px;padding:10px;"> Наши клиенты и их данные: </h3>
       <br>
       <br>
<?php
session_start();
//Display client's data to administrator from customers_list table
$link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak');
$query= "SELECT * FROM cafe_kypshak.customer_list";   
$result = mysqli_query($link, $query);
$myrow = mysqli_fetch_array($result);
  echo('<form  method="POST">');
  echo('<input type="text" style="width:50px" value="id"]>');
  echo('<input type="text" style="width:130px" value="Имя">');
  echo('<input type="text" style="width:130px" value="Фамилия">');
  echo('<input type="text" style="width:130px" value="Логин">');
  echo('<input type="text" style="width:140px" value="Пароль">');
  echo('<input type="text" style="width:200px" value="email">');
  echo('<input type="text" style="width:250px"value="Адрес">');
  echo('<input type="text" style="width:130px"value="Номер телефона">');
  echo('</form>');
do
{
  echo('<form action="customer_change.php" method="POST">');
  echo('<input type="text" style="width:50px" name="customer_id" value='.$myrow['customer_id'].'>');
  echo('<input type="text" style="width:130px" name="customer_name" value='.$myrow['customer_name'].'>');
  echo('<input type="text" style="width:130px" name="customer_lastname" value='.$myrow['customer_lastname'].'>');
  echo('<input type="text" style="width:130px" name="customer_login" value='.$myrow['customer_login'].'>');
  echo('<input type="text" style="width:140px" name="customer_password" value='.$myrow['customer_password'].'>');
  echo('<input type="text" style="width:200px" name="customer_email" value='.$myrow['customer_email'].'>');
  echo('<input type="text" style="width:250px" name="customer_address" value="'.$myrow['customer_address'].'">');
  echo('<input type="text" style="width:130px" name="customer_phone_number" value='.$myrow['customer_phone_number'].'>');
  echo('<input type="submit" name="delete_customer" value="Удалить">'); //delete row
  echo('<input type="submit" name="alter_customer" value="Изменить">'); //change client data
  echo('</form>');
}
while ($myrow = mysqli_fetch_array($result));

?>
  <button onclick="goBack()" type="submit" class="btn-danger"> <span class="glyphicon glyphicon-remove"></span> Назад</button>
</div>
</div>

</body>
</html>