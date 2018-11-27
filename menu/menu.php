<!DOCTYPE html>
<html lang="en">
<head>
  <title>Меню</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../images/logo2.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
  <script type="text/javascript" src="../js/active.js"></script>
  <script type="text/javascript" src="../js/gototop.js"></script>
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
  <?php
session_start();
$link = mysqli_connect ('localhost','cafe_kypshak','kypshak_cafe','cafe_kypshak');
?>
  <!--Horizontal navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"; style="font-family:Astakhov Dished; font-size:170%; color:#FFF8DC"> <i class="glyphicon glyphicon-cutlery" style="font-size:80%";></i>  Кыпшак </a> 
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="../index.php"><i class="fa fa-bars"></i> Главная</a></li>
        <li class="active"><a href="../menu/menu.php"><i class="glyphicon glyphicon-glass"></i> Меню  </a></li>
		<li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
        <li><a href="../booking/customer_details.php"><i class="glyphicon glyphicon-shopping-cart"></i> Бронирование</a></li>
		 <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
		  <li><a href="#Contacts"><i class="glyphicon glyphicon-envelope"></i> Контакты</a></li>
	  <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
	      <li><a href="../comment/comment.php"><i class="glyphicon glyphicon-thumbs-up"></i> Отзывы</a></li>
		  <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>		
      <li><a href="../aboutus/aboutus.php"><i class="glyphicon glyphicon-certificate"></i> О нас</a></li>
  </div>
</nav>
<div class="container">
<div class="modal-header" style="padding:20px 50px;">
<h4><span class="glyphicon glyphicon-cutlery"></span> Наше Меню </h4>
</div>
<div class="row">
<nav class="navbar navbar">
<div class="collapse navbar-collapse" id="foodmenu">
  <ul class="nav navbar-nav" id="navbar">
    <li><a class="active" href="#Shishkebab">Шашлыки</a></li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Блюда<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#firstdishes">Первые блюда</a></li>
        <li><a href="#seconddishes">Вторые блюда</a></li>
        <li><a href="#turkish">Турецкие блюда</a></li>
      </ul> </li>  
	<li><a href="#Salads">Салаты</a></li>
	<li><a href="#ColdSnacks">Холодные закуски</a></li>
  <li><a href="#Desertsdrinks">Напитки</a></li>
	<li><a href="#newdishes">Новые блюда</a></li>
</ul>
</div>
</nav>
  <div class="col-sm-8">
   <a id="gotoTop" href="#" onclick="top.gotoTop(); return false;"></a>
     <div class="thumbnail" id="Shishkebab">
          <img src="../images/barbecue.jpg" alt="Food1" style="height: 400px; width: 100%;">
          <div class="caption">
            <h2 class="text-center" style="margin-bottom:5px;">Шашлыки</h2>
<?php
$queryfood= "SELECT * FROM cafe_kypshak.food_menu where food_id<8 order by food_id";   
$resultfood = mysqli_query($link, $queryfood);
$rowfood = mysqli_fetch_array($resultfood);
do
{
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
}
while ($rowfood = mysqli_fetch_array($resultfood));
?>

          </div>
      </div>
      <div class="thumbnail" id="turkish">
          <img src="../images/turkish.jpg" alt="Food1" style="height: 400px; width: 100%;">
          <div class="caption">
            <h2 class="text-center" style="margin-bottom:5px;">Турецкие блюда</h2>
<?php
$queryfood= "SELECT * FROM cafe_kypshak.food_menu where food_id between 8 and 10 order by food_id";   
$resultfood = mysqli_query($link, $queryfood);
$rowfood = mysqli_fetch_array($resultfood);
do
{
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
}
while ($rowfood = mysqli_fetch_array($resultfood));
?>
   </div>
      </div>
      <div class="thumbnail" id="firstdishes">
          <img src="../images/firstdishes.jpg" alt="Food1" style="height: 400px; width: 100%;">
          <div class="caption">
            <h2 class="text-center" style="margin-bottom:5px;">Первые блюда</h2>
<?php
$queryfood= "SELECT * FROM cafe_kypshak.food_menu where food_id between 11 and 15 order by food_id";   
$resultfood = mysqli_query($link, $queryfood);
$rowfood = mysqli_fetch_array($resultfood);
do
{
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
}
while ($rowfood = mysqli_fetch_array($resultfood));
?>
</div>
      </div>
      <div class="thumbnail" id="seconddishes">
          <img src="../images/seconddishes.jpg" alt="Food1" style="height: 400px; width: 100%;">
          <div class="caption">
            <h2 class="text-center" style="margin-bottom:5px;">Вторые блюда</h2>
<?php
$queryfood= "SELECT * FROM cafe_kypshak.food_menu where food_id between 16 and 42 order by food_id";   
$resultfood = mysqli_query($link, $queryfood);
$rowfood = mysqli_fetch_array($resultfood);
do
{
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
}
while ($rowfood = mysqli_fetch_array($resultfood));
?>
</div>
      </div>
      <div class="thumbnail" id="Salads">
        <img src="../images/salads.jpg" alt="Food1" style="height: 400px; width: 100%;">
<div class="caption">
<h2 class="text-center" style="margin-bottom:5px;">Салаты</h2>
<?php
$queryfood= "SELECT * FROM cafe_kypshak.food_menu where food_id between 43 and 58 order by food_id";   
$resultfood = mysqli_query($link, $queryfood);
$rowfood = mysqli_fetch_array($resultfood);
do
{
  //Display second dishes from table
echo('<form action="foodchange.php" method="POST">');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('</form>');}
while ($rowfood = mysqli_fetch_array($resultfood));
?>
</div>
</div>
<div class="thumbnail" id="ColdSnacks">
  <img src="../images/coldsnacks.jpg" alt="Food1" style="height: 400px; width: 100%;">
<div class="caption">
<h2 class="text-center" style="margin-bottom:5px;">Холодные закуски</h2>
<?php
$queryfood= "SELECT * FROM cafe_kypshak.food_menu where food_id between 59 and 62 order by food_id";   
$resultfood = mysqli_query($link, $queryfood);
$rowfood = mysqli_fetch_array($resultfood);
do
{
  //Display second dishes from table
echo('<form action="foodchange.php" method="POST">');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('</form>');}
while ($rowfood = mysqli_fetch_array($resultfood));
?>
</div>
</div>
<div class="thumbnail" id="Desertsdrinks">
<img src="../images/desertdrink.jpg" alt="Food1" style="height: 400px; width: 100%;">
<div class="caption">
<h2 class="text-center" style="margin-bottom:5px;">Десерты, коктейли, напитки</h2>
<?php
$queryfood= "SELECT * FROM cafe_kypshak.food_menu where food_id between 63 and 73 order by food_id";   
$resultfood = mysqli_query($link, $queryfood);
$rowfood = mysqli_fetch_array($resultfood);
do
{
  //Display second dishes from table
echo('<form action="foodchange.php" method="POST">');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('</form>');}
while ($rowfood = mysqli_fetch_array($resultfood));
?>
</div>
</div>
      <div class="thumbnail" id="newdishes">
          <img src="../images/newdishes.jpg" alt="Food1" style="height: 400px; width: 100%;">
          <div class="caption">
            <h2 class="text-center" style="margin-bottom:5px;">Новые блюда нашей кухни</h2>
     <?php
$queryfood= "SELECT * FROM cafe_kypshak.food_menu where food_id>73 order by food_id";   
$resultfood = mysqli_query($link, $queryfood);
$rowfood = mysqli_fetch_array($resultfood);
do
{
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
}
while ($rowfood = mysqli_fetch_array($resultfood));
?>       
    </div>
  </div>

  </div>


</div>

</div>
 
  
<!--footer contacts form divided to google maps and contact list-->
<footer style="background:#fff; padding-top:5px; padding-bottom:20px;">
<h2 class="text-center" id="Contacts" style="margin-bottom:25px;">Контакты</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
    <div id="map"></div>
    <script src="../js/googlemap.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoT47mqYvL1gSiVT_1trbPFMoaVCFIBz4&callback=initMap">
    </script>
      </div>
       <div class="row">
    <div class="col-sm-6">
      <p>Свяжитесь с нами, и мы свяжемся с вами в течение 24 часов.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Казахстан, Кызылорда, улица Токмаганбетова</p>
      <p><span class="glyphicon glyphicon-phone"></span> +7 777 497 5757</p>
      <p><span class="glyphicon glyphicon-envelope"></span> cafekypshak@gmail.com</p> 
    </div>	
      </div>
    </div>
	<br>
	<footer style="background-color:#FFF5EE">
    <div class="row">
      <div class="col-md-4 details">
        <h5>ТОО "Кыпшак" Кафе</h5>
      </div>
      <div class="col-md-4">	
        <h5 style="text-align:center;">Казахстан, Кызылорда 2017</h5>
      </div>
      <div class="col-md-4">
        <h5 style="text-align:right;" >Сайт разработчика  <a href="#">Martian</a></h5>
       
      </div>
    </div>
	</footer>
  </div>
</footer>


</body>
</html>