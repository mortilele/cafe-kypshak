<!DOCTYPE html>
<html lang="en">
<head>
  <title>Главная страница</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo2.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</head>
<!--Insert postlogs data into div section called post_content id-->
<script>    $(document).ready(function(e) { 
      $.ajaxSetup({cache:false});
      setInterval(function() {$('#post_content').load('postlogs.php');}, 2000);
    });</script>

<body style="background-color:#Fefefe;overflow-x:hidden;">
<header> <!-- Banner, divided to 3 equal parts-->
 <div class="container">
   <div class="row">
     <div class="col-sm-4 logotype"> <!-- Logotype of cafe-->
       <img src="images/322.jpg" alt="Logo"  style="width:100%"class="img-responsive">
     </div>
     <div class="col-sm-4 descript text-center" style="margin-top:30px;">
       <h2 style="font-size:40px; color:#666666;"><b>Кафе Кыпшак</b></h2> <!-- Name of cafe -->
     </div>
    <div class="col-sm-4 phone_number">
       <h2 style="text-align:right;">+7 777 497 5757</h2>  <!-- Contact number-->
	   <p class="anim" id="anima">&mdash; Контакт &mdash;</p> <!-- Animated text -->
    </div>
   </div>
 </div>
</header>
  <!--Horizontal navigation bar-->
<nav class="navbar navbar-inverse">
 <div class="container-fluid">
  <div class="navbar-header">
   <a class="navbar-brand" href="../index.php"; style="font-family:Astakhov Dished; font-size:170%; color:#FFF8DC">
   <i class="glyphicon glyphicon-cutlery" style="font-size:80%";></i>  Кыпшак </a> <!-- Navigation header -->
  </div>
   <div class="collapse navbar-collapse" id="myNavbar"> <!-- Navigation menu -->
     <ul class="nav navbar-nav"> <!-- tag to create bulleted list-->
        <li class="active"><a href="../index.php"><i class="fa fa-bars"></i> Главная</a></li> <!--Home page link-->
        <li><a href="menu/menu.php"><i class="glyphicon glyphicon-glass"></i> Меню  </a></li> <!--Menu link-->
		<li><a>  <img src=images/png.png style="height: 20px; width: 25px;"> </a></li> <!--Just little image-->
        <li><a href="booking/customer_details.php"><i class="glyphicon glyphicon-cutlery"></i> Бронирование</a></li> <!-- Booking page-->
		<li><a>  <img src=images/png.png style="height: 20px; width: 25px;"> </a></li> <!--Just little image-->
		<li><a href="#Contacts"><i class="glyphicon glyphicon-envelope"></i> Контакты</a></li> <!--Link to contacts -->
	    <li><a>  <img src=images/png.png style="height: 20px; width: 25px;"> </a></li> <!--Just little image-->
	    <li><a href="comment/comment.php"><i class="glyphicon glyphicon-comment"></i> Отзывы</a></li> <!--Comments link -->
		<li><a>  <img src=images/png.png style="height: 20px; width: 25px;"> </a></li> <!--Just little image-->
        <li><a href="aboutus/aboutus.php"><i class="glyphicon glyphicon-certificate"></i> О нас</a></li> <!--About us link-->
     </ul>		
  </div>
 </div>
</nav> <!-- Close tag of navigaton menu-->

<div class="container"> <!-- Main part of home page-->
<div class="row">
  <div class="col-sm-8"> <!-- 2/3 part of page-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
         <img src=images/pic_20.jpg     alt="Image">
      <div class="carousel-caption">
		 <h3 style="background-color:#b0e0a1" >Приятная обстановка для тебя!</h3>
       </div>      
       </div>
       <div class="item">
         <img src=images/pic_21.jpg alt="Image">
       <div class="carousel-caption">
          <h3 style="background-color:#b0e0a1" > Жағымды орта сен үшін! </h3>
      </div>      
      </div>
    </div>
    <!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> 
 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
 <span class="sr-only">Previous</span>  <!--to the left image-->
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
 <span class="sr-only">Next</span>  <!--to the right image -->
</a>
</div>
</div>
<div class="col-sm-4"> <!--1/3 part of page-->
<div class="well"> <!--Cafe data section -->
 <h3 style="text-align:center;"> 
   <i class="glyphicon glyphicon-time"></i> Вс - Чт с 12:00 - 01:00; <!--Schedule-->
   <h3 style="text-align:center;"> Пт - Сб 12:00 - 02:00 </h3>
 </h3>
</div>
<div class="well">
   <h3> <i class="glyphicon glyphicon-cutlery"></i> Творческая кухня</h3> <!--Cuisine -->
   <h3> <img src=images/table.png style="height: 20px; width: 25px;"> Посадочных мест: 120</h3> 
</div>
</div>

</div>
<hr>
</div>

<!--Container divided to 4 parts-->
<div class="container text-center">    
  <h3>Галерея</h3> <!--Gallery part-->
  <br>
  <div class="row">
    <div class="col-sm-3">
      <div class="thumbnail"> <!--First image and text-->
          <img src="images/interior.jpg" alt="Food1" style="height: 200px; width: 100%;">
          <div class="caption">
            <p> Большой банкетный зал</p>
          </div>
      </div>
    </div>
   <div class="col-sm-3">
      <div class="thumbnail"> <!--Vip room image-->
          <img src="images/vip.jpg" alt="Food1" style="height: 200px; width: 100%;">
          <div class="caption">
            <p>Вип комната</p>
          </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail"> <!--Outside view of cafe-->
          <img src="images/outside.jpg" alt="Food1" style="height: 200px; width: 100%;">
          <div class="caption">
            <p>Мы тут!</p>
          </div>
      </div>
    </div>
   <div class="col-sm-3">
      <div class="thumbnail"> <!--Main dish-->
          <img src="images/barbecue.jpg" alt="Food1" style="height: 200px; width: 100%;">
          <div class="caption">
            <p>Лучшие вкусные шашлыки</p>
          </div>
      </div>
    </div>
      

</div>
    </div>
     
  </div>
  
</div>
 <div id="post_content" style="width:800px; margin:0 auto;">
    </div>

<!--footer contacts form divided to google maps and contact list-->
<footer style="background:#fff; padding-top:5px; padding-bottom:20px;">
<h2 class="text-center" id="Contacts" style="margin-bottom:25px;">Контакты</h2> <!--Footer header-->
 <div class="container">
  <div class="row">
   <div class="col-md-6"> <!--Google map section-->
    <div id="map"></div>
   <script src="js/googlemap.js"></script> <!--Google map script-->
   <script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoT47mqYvL1gSiVT_1trbPFMoaVCFIBz4&callback=initMap"> <!--Script unique key-->
   </script>
   </div>
   <div class="row">
    <div class="col-sm-6"> <!--Contact details section-->
      <p>Свяжитесь с нами, и мы свяжемся с вами в течение 24 часов.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Казахстан, Кызылорда, улица Токмаганбетова</p> <!--Address-->
      <p><span class="glyphicon glyphicon-phone"></span> +7 777 497 5757</p> <!--Contact number-->
      <p><span class="glyphicon glyphicon-envelope"></span> cafekypshak@gmail.com</p> <!--Email-->
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
     <h5 style="text-align:right;" >Сайт разработчика  <a href="#">Алик</a></h5>
    </div>
 </div>
</footer>
  </div>
</footer>


</body>
</html>