<!DOCTYPE html>
<html lang="en">
<head>
  <title>Главная страница</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../images/logo2.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</head>
<?php              
session_start();
$customer_login=$_SESSION['customer_login'];
?>
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
        <li>  <form class="navbar-form navbar-right" action="myorders.php" method="POST">
      <input name="customer_login" style="visibility:hidden;width:10px" value='<?php
        if (!(isset($_SESSION['customer_login'])))
        { 
          echo 'GUEST';
        } 
        else 
        {
        echo ''.$_SESSION['customer_login'];
        }
        ?>'>
        <button type="submit" class="btn" style="position: relative; left: 50px;font-family:Segoe UI Black; padding: 7px 25px;"> <i class="glyphicon glyphicon-log-in"></i>   Мои заказы и брони</button>
      </form>
      </li>
  </div>
</nav>
<div class="modal-content"> <!--Booking form-->
 <div class="modal-header" style="padding:20px 50px;">
  <h4><span class="glyphicon glyphicon-lock"></span> Заявка на бронирования</h4> <!--Header Booking-->
 </div>
<div id="home" class="tab-pane fade in active">
<div class="modal-body" style="padding:40px 50px;">
<form role="form" action="book_insert.php" method="POST"> <!--Send data to book_insert.php-->
<div class="form-group">
<!--Client login, automatically inserted into field, no change-->
<label for="customer_login"><span class=" glyphicon glyphicon-king"></span> Логин клиента</label>
<input name="customer_login" class="form-control" value='<?php
echo ''.$_SESSION['customer_login']; ?>' readonly>
</div>
<div class="form-group">
<!--Select type of booking-->
<label for="book_type"><span class="  glyphicon glyphicon-bookmark"> </span> Вид бронирования:</label>
<select class="form-control" name="book_type" required>
        <option>Обычное застолье</option> <!--Usual meeting-->
        <option>День рождение</option> <!--Birthday-->
        <option>Праздник</option> <!--Celebration-->
        <option>Свадьба</option> <!--Wedding-->
        <option>Поминки</option> <!--Memorial-->
</select>
</div>
<div class="form-group">
<!--Select number of visitors-->
<label for="number_of_people"><span class="glyphicon glyphicon-user"></span> Количество людей</label>
<select class="form-control" name="number_of_people" required>     
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>15</option>
        <option>20</option>
        <option>25</option>
        <option>30</option>
        <option>35</option>
        <option>40</option>
        <option>45</option>
        <option>50</option>
</select>
</div>
<div class="form-group">
<!--Select date of booking in calendar-->
<label><span class="glyphicon glyphicon-calendar"></span> Дата</label>
<input class="form-control" type="date" name="book_date" min="2017-10-10" required>
</div>
<!--Select time of booking-->
<div class="form-group">
<label><span class="glyphicon glyphicon-time"></span> Время</label>
<select class="form-control" name="book_time" required>
        <option>14:00</option>
        <option>14:30</option>
        <option>15:00</option>
        <option>15:30</option>
        <option>16:00</option>
        <option>16:30</option>
        <option>17:30</option>
        <option>18:00</option>
        <option>18:30</option>
        <option>19:00</option>
        <option>19:30</option>
        <option>20:00</option>
        <option>20:30</option>
        <option>21:00</option>
        <option>21:30</option>
        <option>22:00</option>
        <option>22:30</option>
        <option>23:00</option>
        <option>23:30</option>
        <option>00:00</option>
        <option>00:30</option>
        <option>1:00</option>
        <option>1:30</option>
        <option>2:00</option>
</select>
</div>
<div class="form-group">
<!--Some notes about booking-->
<label><span class="  glyphicon glyphicon-tags"></span> Примечание</label>
<textarea class="form-control" id="book_note" name="book_note" placeholder="Примечание" rows="5"></textarea>
</div>
<button type="submit" class="btn btn-success btn-block"><span class=" glyphicon glyphicon-ok"></span> Подать заявку</button>
</form>
</div>
<div class="modal-footer">
<!--Cancel booking-->
<form action="../registration/logout.php" method="post">
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Отмена</button>
</form>
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