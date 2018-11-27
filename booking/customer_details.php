<!DOCTYPE html>
<html lang="en">
<head>
  <title>Регистрация клиента</title>
  <meta charset=utf-8>
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
        <li class="active"><a href="customer_details.php"><i class="glyphicon glyphicon-cutlery"></i> Бронирование</a></li>
		 <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
		  <li><a href="#Contacts"><i class="glyphicon glyphicon-envelope"></i> Контакты</a></li>
	  <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
	      <li><a href="../comment/comment.php"><i class="glyphicon glyphicon-comment"></i> Отзывы</a></li>
		  <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>		
      <li><a href="../aboutus/aboutus.php"><i class="glyphicon glyphicon-certificate"></i> О нас</a></li>
  </div>
</nav>
 <div class="modal-content">
<!--Authorization-->
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<div class="modal-header" style="padding:20px 50px;">
 <h4><span class="glyphicon glyphicon-list-alt"></span> Авторизация клиента</h4> <!--Form header-->
 </div>
<div class="modal-body" style="padding:40px 50px;">
<form role="form" action="../registration/signin.php" method="POST"> <!--Send data to signin.php-->
<div class="form-group">
<!--Input login and data regular expression to check length between 5 - 15, only English, numbers and symbols are allowed -->
<label for="customer_login"><span class="glyphicon glyphicon-user"></span> Имя пользователя</label> 
<input name= "customer_login" required type="text" class="form-control" placeholder="Имя пользователя" 
maxlength="15" pattern="[0-9A-Za-z-_.]{5,15}" title="Можно использовать буквы латинского алфавита, цифры и точки"> 
</div>
<div class="form-group">
<!--Input password and check expressions as min length 8, max 25, accepts English characters, numbers and symbols-->
<label for="customer_password"><span class="glyphicon glyphicon-lock"></span> Пароль</label>
<input name="customer_password" required type="password" class="form-control" placeholder="Пароль" 
maxlength="25" pattern="[A-Za-z0-9-_.]{8,25}" title="Минимальная длина пароля - восемь символов">
</div>
<!--Accept entered data and post-->
<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Войти</button> 
</form>
</div>
<div class="modal-footer"> <!--Modal footer to cancel or register new client-->
<button onclick="goBack()" type="submit" class="btn btn-danger btn-default pull-left"> <span class="glyphicon glyphicon-remove"></span> Отмена</button>
<p> Нету учетной записи? <a data-toggle="tab" href="#menu1">Регистрация</a>
</div> 
</div>
    <!--Registration new users-->
 <div id="menu1" class="tab-pane fade">
<div class="modal-header" style="padding:20px 50px;">
<h4><span class="glyphicon glyphicon-list-alt"></span> Регистрация клиента</h4>  <!--Header-->
</div>
<div class="modal-body" style="padding:40px 50px;">
<form role="form" action="../registration/save_user.php" method="POST"> <!--Send data to save_user.php-->
<div class="form-group">
<!--Input client name and accept length 3-25, only Latin and Cyrillic alphabet, no numbers-->
<label for="customer_name"><span class="glyphicon glyphicon-user"></span> Имя</label>
<input name= "customer_name" required type="text" class="form-control" placeholder="Ваше имя" maxlength="25" pattern="[А-Яа-яA-Za-z]{3,25}" title="Имя должно состоять из букв">
</div>
<div class="form-group">
<!--Input client last name and accept length 3-25, only Latin and Cyrillic alphabet, no numbers-->
<label for="customer_lastname"><span class="glyphicon glyphicon-user"></span> Фамилия</label>
<input name="customer_lastname" required type="text" class="form-control" placeholder="Ваша фамилия" maxlength="25" pattern="[А-Яа-яA-Za-z]{3,25}" title="Фамилия должна состоять из букв">
</div>
<div class="form-group">
<!--Input client login and accept length 5-15, only Latin alphabet, symbols and numbers allowed-->
<label for="customer_login"><span class="glyphicon glyphicon-user"></span> Логин клиента</label>
<input name= "customer_login" required type="text" class="form-control" placeholder="Ваш логин" maxlength="15" pattern="[0-9A-Za-z-_.]{5,15}" title="Можно использовать буквы латинского алфавита, цифры и точки">
</div>
<div class="form-group">
<!--Input client password, min 8, max 25 length, accept Latin alphabet, numbers, symbols-->
<label for="customer_password"><span class="glyphicon glyphicon-lock"></span> Пароль </label>
<input name= "customer_password" id="password" required type="password" class="form-control" placeholder="Введите пароль" maxlength="25" pattern="[A-Za-z0-9-_.]{8,25}" title="Минимальная длина пароля - восемь символов. Не рекомендуется использовать пароли от других сайтов или слова, которые злоумышленники смогут легко подобрать">
</div>
<div class="form-group">
<!--Re - enter password for confirmaiton, if pass not match retry-->
<input type="password" placeholder="Подтверждение пароля" id="confirm_password" class="form-control" required>
<script  src="../js/passwordsvalidation.js"></script> <!--script to check to password input forms -->
</div>
<div class="form-group">
<!--Input client email and type email, requires @-->
<label for="customer_email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
<input name= "customer_email" required type="email" class="form-control" placeholder="Ваш Email" maxlength="25"  title="Можно использовать буквы латинского алфавита, цифры и точки">
</div>
<div class="form-group">
<!--Input client address location, any data, but max length 60-->
<label for="customer_address"><span class="glyphicon glyphicon-map-marker"></span> Адрес</label>
<input name= "customer_address" class="form-control" placeholder="Ваш адрес" maxlength="60" required>
</div>
<!--Input client phone number, accept only eleven - digit numbers-->
<div class="form-group">
<label for="customer_phone_number"><span class="glyphicon glyphicon-phone"></span> Номер телефона</label>
<input name= "customer_phone_number" class="form-control" type="tel" pattern="[0-9]{11,11}" maxlength="11" placeholder="Ваш номер Телефона" title="Введите ваш одиннадцатизначный номер номер телефона" required >
</div>
<div class="form-group">
<!--Captcha test in order to check -->
<input class="btn btn-danger btn-default" id="sub" type="button" value="Я не робот" onclick="sum()">
<span style="font-size: 25px"; class="glyphicon glyphicon-eye-open"></span>
<em id="demo1"></em><em>+</em><em id="demo2"></em><em>=</em> <!--Show the question-->
<input title="Введите правильный ответ на вопрос, чтобы подтвердить вашу личность" id="rez" style="width:150px;height:41px;font-size: 25px"; type="number" min="0" max="30"> <!--Answer correctly to question-->
<input class="btn btn-danger btn-default pull-right" type="reset" class="reset" value="Clear form"> <!--Clear all input fields-->
</div>
<input type="submit" class="btn btn-success btn-block" id="regist" class="submit" value="Registration" > 
<script  src="../js/math.js"></script> <!--Script to randomize numbers and check right calculation-->
</form>
</div>
<div class="modal-footer"> <!--Move to previous page-->
<button onclick="goBack()" type="submit" class="btn-danger btn-default pull-left"> <span class="glyphicon glyphicon-remove"></span> Отмена</button>
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