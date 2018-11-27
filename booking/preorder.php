<!DOCTYPE html>
<html lang="en">
<head>
  <title>Предзаказ еды</title>
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
  <style>

table, th, td {
    border: 1px solid black;
    padding: 5px;
}
table {
    border-spacing: 15px;
}
#foodmenu 
{background-color:#f3f3f3;
margin-left: 15px;
margin-right: 15px;
} 
li a {
    display: block;
    color: #666;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
    text-decoration: none;
}

li a.active {
    color: white;
    background-color: #2b0401;;
    text-decoration: none;
}

</style>
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
echo  "<script>alert(\"Закажите блюда на ваш столик!\");</script>";
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
        <li><a href="../menu/menu.php"><i class="glyphicon glyphicon-glass"></i> Меню  </a></li>
		<li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
        <li class="active"><a href="preorder.php"><i class="glyphicon glyphicon-shopping-cart"></i> Заказ</a></li>
		 <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
		  <li><a href="#Contacts"><i class="glyphicon glyphicon-envelope"></i> Контакты</a></li>
	  <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
	      <li><a href="../comment/comment.php"><i class="glyphicon glyphicon-thumbs-up"></i> Отзывы</a></li>
		  <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>		
      <li><a href="../aboutus/aboutus.php"><i class="glyphicon glyphicon-certificate"></i> О нас</a></li>
  </div>
</nav>

<div class="container">
<div class="modal-header" style="padding:20px 50px;"> <!--Preorder header-->
<h4><span class="glyphicon glyphicon-cutlery"></span> Предзаказ еды</h4>
</div>
<div class="row">
<nav class="navbar navbar">
<div class="collapse navbar-collapse" id="foodmenu">
  <ul class="nav navbar-nav" id="navbar"> <!--Horizontal navigation menu of dishes-->
    <li><a class="active" href="#Shishkebab">Шашлыки</a></li> <!--Link to shishkebabs-->
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Блюда<span class="caret"></span></a>
      <ul class="dropdown-menu"> <!--Dropdown, list of dishes type-->
        <li><a href="#firstdishes">Первые блюда</a></li>
        <li><a href="#seconddishes">Вторые блюда</a></li>
        <li><a href="#turkish">Турецкие блюда</a></li>
      </ul> </li>  
	<li><a href="#Salads">Салаты</a></li> <!--Salads-->
	<li><a href="#ColdSnacks">Холодные закуски</a></li> <!--Cold Snacks-->
  <li><a href="#Desertsdrinks">Напитки</a></li> <!--Cold Snacks-->
	<li><a href="#newdishes">Новые блюда</a></li> <!--New inserted dishes list-->
<li style="float:right">
<form class="navbar-form navbar-right" action="myorders.php" method="POST"> <!--Link to my order page-->
<input name="customer_login" style="visibility:hidden;width:1px" value='<?php
echo ''.$_SESSION['customer_login']; ?>'>
<input name="book_id"  style="visibility:hidden;width:1px" value='<?php echo ''.$_SESSION['last_id']; ?>'>
<button type="submit" class="btn" style="position: relative;font-family:Segoe UI Black; padding: 7px 5px;margin-left:85px;"> 
<i class="glyphicon glyphicon-log-in"></i>   Мои предыдущие заказы и брони</button>
</form></li>
</ul>
</div>
</nav>
<div class="col-sm-8"> <!--Menu list-->
 <a id="gotoTop" href="#" onclick="top.gotoTop(); return false;"></a> <!--Go to top quickly-->
 <div class="thumbnail" id="Shishkebab"> <!--Shish kebabs section-->
 <img src="../images/barbecue.jpg" alt="Food1" style="height: 400px; width: 100%;">
 <div class="caption">
  <h2 class="text-center" style="margin-bottom:5px;">Шашлыки</h2>
<?php
$queryfood= "SELECT * FROM cafe_kypshak.food_menu where food_id<8 order by food_id";   
$resultfood = mysqli_query($link, $queryfood);
$rowfood = mysqli_fetch_array($resultfood);
do
//Display shish kebabs from table
{
echo('<form action="orderfood.php" method="POST">');
  echo('<input class="hidden" name="book_id" value='.$_SESSION['last_id'].'>');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('<input required type="number"  style="padding: 10px 20px;width:110px;margin-right:17px;margin-left:10px" id="quantity" pattern="[0-9]{1,3}" max="100" maxlength="3" name="quantityfood">' );
  echo('<button class="btn" type="submit" name="order"> <span class="glyphicon glyphicon-plus-sign"> Добавить <span> </button>' );
  echo('</form>');}
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
	//Display turkish dishes from table
echo('<form action="orderfood.php" method="POST">');
  echo('<input class="hidden" name="book_id" value='.$_SESSION['last_id'].'>');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('<input required type="number"  style="padding: 10px 20px;width:110px;margin-right:17px;margin-left:10px" id="quantity" pattern="[0-9]{1,3}" max="100" maxlength="3" name="quantityfood">' );
  echo('<button class="btn" type="submit" name="order"> <span class="glyphicon glyphicon-plus-sign"> Добавить <span> </button>' );
  echo('</form>');}
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
	//Display first dishes from table
echo('<form action="orderfood.php" method="POST">');
  echo('<input class="hidden" name="book_id" value='.$_SESSION['last_id'].'>');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('<input required type="number"  style="padding: 10px 20px;width:110px;margin-right:17px;margin-left:10px" id="quantity" pattern="[0-9]{1,3}" max="100" maxlength="3" name="quantityfood">' );
  echo('<button class="btn" type="submit" name="order"> <span class="glyphicon glyphicon-plus-sign"> Добавить <span> </button>' );
  echo('</form>');}
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
	//Display second dishes from table
echo('<form action="orderfood.php" method="POST">');
  echo('<input class="hidden" name="book_id" value='.$_SESSION['last_id'].'>');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('<input required style="padding: 10px 20px;width:110px;margin-right:17px;margin-left:10px" id="quantity" name="quantityfood">' );
  echo('<button class="btn" type="submit" name="order"> <span class="glyphicon glyphicon-plus-sign"> Добавить <span> </button>' );
  echo('</form>');}
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
  //Display salads from table
echo('<form action="orderfood.php" method="POST">');
  echo('<input class="hidden" name="book_id" value='.$_SESSION['last_id'].'>');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('<input required style="padding: 10px 20px;width:110px;margin-right:17px;margin-left:10px" id="quantity" name="quantityfood">' );
  echo('<button class="btn" type="submit" name="order"> <span class="glyphicon glyphicon-plus-sign"> Добавить <span> </button>' );
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
  //Display cold snacks dishes from table
echo('<form action="orderfood.php" method="POST">');
  echo('<input class="hidden" name="book_id" value='.$_SESSION['last_id'].'>');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('<input required style="padding: 10px 20px;width:110px;margin-right:17px;margin-left:10px" id="quantity" name="quantityfood">' );
  echo('<button class="btn" type="submit" name="order"> <span class="glyphicon glyphicon-plus-sign"> Добавить <span> </button>' );
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
  //Display deserts, drinks from table
echo('<form action="orderfood.php" method="POST">');
  echo('<input class="hidden" name="book_id" value='.$_SESSION['last_id'].'>');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('<input required style="padding: 10px 20px;width:110px;margin-right:17px;margin-left:10px" id="quantity" name="quantityfood">' );
  echo('<button class="btn" type="submit" name="order"> <span class="glyphicon glyphicon-plus-sign"> Добавить <span> </button>' );
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
	//Display New dishes
echo('<form action="orderfood.php" method="POST">');
  echo('<input class="hidden" name="book_id" value='.$_SESSION['last_id'].'>');
  echo('<input title="'.$rowfood['food_description'].'" type="text" style="padding: 10px 20px;width:320px;" readonly name="food_name" value="'.$rowfood['food_name'].'">');
  echo('<input style="padding: 10px 20px;width:120px;margin-left:7.5px" readonly id="price" name="food_price" value='.$rowfood['food_price'].'>');
  echo('<input required style="padding: 10px 20px;width:110px;margin-right:17px;margin-left:10px" id="quantity" name="quantityfood">' );
  echo('<button class="btn" type="submit" name="order"> <span class="glyphicon glyphicon-plus-sign"> Добавить <span> </button>' );
  echo('</form>');}
while ($rowfood = mysqli_fetch_array($resultfood));
?>       
</div>
</div>
</div>
<div class="col-sm-4" style="position:fixed;margin-left:51%"> <!--Orders table-->
<div class="form-group">
<label for="book_id"><span class="glyphicon glyphicon-bookmark"></span> Ваш номер бронирования = <input style="width:50px" name="book_id" 
value='<?php echo ''.$_SESSION['last_id']; ?>' readonly> </label> <!--Display current booking number-->
</div>        
<table>
  <tr>
    <th style="width:166px">Еда</th> <!--Food name-->
    <th style="width:50px ">Кол-во</th> <!--Quantity-->
    <th style="width:70px">Сумма</th> <!--Total value of that food order-->
    <th style="width:20px">-</th>
  </tr>
</table>
<?php
$book_id=$_SESSION['last_id'];
$querybookorders= "SELECT * FROM cafe_kypshak.orders_list where book_id=$book_id";   
$resultbookorder = mysqli_query($link, $querybookorders);
$rowbookorder = mysqli_fetch_array($resultbookorder);
do
{
	//Display all orders of current booking number
  echo('<form action="../admin/bookchange.php" method="POST">');
  echo('<input style="visibility:hidden;width:0px;" name="order_id" value='.$rowbookorder['order_id'].'>');
  echo('<input type="text" style="width:160px" name="food_name" value="'.$rowbookorder['food_name'].'">');
  echo('<input style="width:50px" name="quantity" value='.$rowbookorder['quantityfood'].'>');
  echo('<input style="width:70px" name="total" value='.$rowbookorder['total'].'>');
  echo('<input type="submit" name="delete_order" value="-">');
  echo('</form>');
}
while ($rowbookorder = mysqli_fetch_array($resultbookorder));
//Count all orders number
foreach($link->query("SELECT COUNT(*) FROM orders_list where book_id='$book_id'") as $rowcount) {
 echo('<p> Количество заказов: '.$rowcount['COUNT(*)']. '</p>');
} 
//Display all quantity of all dishes ordered
foreach($link->query("SELECT SUM(quantityfood) FROM orders_list where book_id='$book_id'") as $rowquantity) {
 echo('<p> Количество всех блюд: ' .$rowquantity['SUM(quantityfood)']. '</p>');
} 
//Calculate and display total order price
foreach($link->query("SELECT SUM(total) FROM orders_list where book_id='$book_id'") as $rowsumtotal) 
{
//Calculate	and display total order price with 15%service
 echo('<p> Итого: ' .$rowsumtotal['SUM(total)']. 'тг</p>');
 $servicetotal=$rowsumtotal['SUM(total)']+(0.15*$rowsumtotal['SUM(total)']);
 echo('<p> Итого к оплате с 15% обслуживанием: ' .$servicetotal. 'тг</p>');
} 
?>
<form action="../registration/logout.php" method="post">
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Отмена</button>
</form> 
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