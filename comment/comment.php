<html>
<head>
  <title>Отзывы</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../images/logo2.png" type="image/x-icon"/>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script>

	function commentSubmit(){
		if(form1.comment_author.value == '' && form1.comment_text.value == ''){ //exit if one of the field is blank
			alert('Введите ваши данные и комментарий !');
			return;
		}
		var comment_author = form1.comment_author.value;
    var author_email = form1.author_email.value;
		var comment_text = form1.comment_text.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', 'insert.php?comment_author='+comment_author+'&author_email='+author_email+'&comment_text='+comment_text, true); //open and send http request
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
		});
		
</script>
</head>
<body style="background-color:#Fefefe;">
<header> <! Banner, divided to 3 equal parts !>
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
	      <li class="active"><a href="../comment/comment.php"><i class="glyphicon glyphicon-thumbs-up"></i> Отзывы</a></li>
		  <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
       <li><a href="../aboutus/aboutus.php"><i class="glyphicon glyphicon-certificate"></i> О нас</a></li>
      </ul>	
  </div>
  </div>
</nav>

<div class="container">
  <h3 class="text-center">Отзывы</h3> <!--Header text-->
  <p class="text-center"><em>Мы любим своих посетителей!</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p> Посетитель? Напиши свой отзыв</p> <!--Contact details-->
      <p><span class="glyphicon glyphicon-map-marker"></span>Кызылорда, Казахстан</p> 
      <p><span class="glyphicon glyphicon-phone"></span>Телефон: +7 777 497 5757</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: cafekypshak@gmail.com</p> 
    </div>
	
<form name="form1"> <!--Input form of comments-->
<div class="col-md-8">
<div class="row">
<div class="col-sm-6 form-group">
<!--Input comment author, accepts Latin and Cyrillic alphabet, min=3, max 25 length-->
<input class="form-control" id="comment_author" name="comment_author" placeholder="Имя"  pattern="[А-Яа-яA-Za-z]{3,25}" type="text" title="Имя должно состоять из букв" required>
</div>
<!--Input author email-->
<div class="col-sm-6 form-group">
<input class="form-control" id="author_email" name="author_email" placeholder="Email"  type="email" required>
</div>
</div>
<!--Input comment text, accepts any alphabet, symbols, numbers, length between 7 - 150 characters, row number 5 -->
<textarea class="form-control" id="comment_text" name="comment_text" placeholder="Комментарий" pattern="[А-Яа-яA-Za-z0-9-_.]{7,150}" rows="5" required></textarea> </br> 
<div class="row">
<!--Send button-->
<div class="col-md-12 form-group">
<button class="btn pull-right" type="submit" onClick="commentSubmit()">  Отправить <span class="glyphicon glyphicon-comment"></span></button>
</div>
</div>
</form>
		<div id="comment_logs"> <!--Comments list-->
    	Загрузка комментариев...
    </div>
    </div>
  </div>
</div>
	
</body>
</html>